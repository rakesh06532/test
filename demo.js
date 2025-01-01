function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Use async and await to handle the asynchronous operation
async function performTask() {
    console.log('Task started');
    
    // Wait for the delay to complete
    await delay(2000); // Waits for 2 seconds
    
    console.log('Task completed');
}

// Call the async function
performTask();

async function fetchData() {
    try {
        const response = await fetch('https://api.restful-api.dev/objects');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
         return data;
    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
    }
}

fetchData();

function customBase64Encode(input) {
    // Step 1: Standard Base64 encoding
    let base64 = btoa(input);
    console.log(base64);

    // Step 2: Custom character translation
    const originalChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    const customChars = "RQPONMLKJIHGFEDCBAZYXWVUTSrqponmlkjihgfedcbazyxwvuts5432109876+/";
    
    // Translate characters using a mapping
    let translated = base64.split('').map(char => {
        const index = originalChars.indexOf(char);
        return index !== -1 ? customChars[index] : char;
    }).join('');

    return translated;
}

// Example Usage
const encoded = customBase64Encode("20.00");
console.log(encoded); // Outputs the custom Base64 encoded string

