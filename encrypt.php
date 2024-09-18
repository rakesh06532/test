<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class PdfController extends Controller
{
    public function actionEncryptDownload($docName)
    {
        $key = $this->generateKey();

        // Encrypt the docName parameter
        $encryptedDocName = $this->encryptString($docName, $key);

        // Build the URL with the encrypted docName
        $encryptedUrl = Yii::$app->urlManager->createAbsoluteUrl(['pdf/decryptDownload', 'docName' => $encryptedDocName]);

        // Redirect to the encrypted URL
        return $this->redirect($encryptedUrl);
    }

    public function actionDecryptDownload($docName)
    {
        $key = $this->generateKey();

        // Decrypt the docName parameter
        $decryptedDocName = $this->decryptString($docName, $key);

        // Load the decrypted file content
        $fileContent = $this->loadDecryptedFileContent($decryptedDocName);

        // Set appropriate headers for file download
        Yii::$app->response->sendContentAsFile($fileContent, $decryptedDocName . '.pdf', ['inline' => true, 'mimeType' => 'application/pdf']);

        // End the application to prevent further processing
        Yii::$app->end();
    }

    private function generateKey()
    {
        return openssl_random_pseudo_bytes(16); // 128-bit key for AES-128
    }

    private function encryptString($input, $key)
    {
        $iv = openssl_random_pseudo_bytes(16);
        $ciphertext = openssl_encrypt($input, 'aes-128-cbc', $key, 0, $iv);
        $encryptedString = base64_encode($iv . $ciphertext);

        return urlencode($encryptedString);
    }

    private function decryptString($input, $key)
    {
        $decodedInput = base64_decode(urldecode($input));
        $iv = substr($decodedInput, 0, 16);
        $ciphertext = substr($decodedInput, 16);

        $decryptedString = openssl_decrypt($ciphertext, 'aes-128-cbc', $key, 0, $iv);

        return $decryptedString;
    }

    private function loadDecryptedFileContent($decryptedDocName)
    {
        // You need to implement your own logic to load the decrypted file content
        // For example, you might fetch the content from a database or a secure storage location.
        // For demonstration purposes, let's assume a simple file read operation.

        $filePath = 'path/to/your/files/' . $decryptedDocName . '.pdf';

        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            // Handle file not found scenario
            throw new \yii\web\NotFoundHttpException('File not found.');
        }
    }
}
