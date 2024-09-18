-- Replace 'table_name', 'column_name', 'value', 'new_value', and 'other_columns' with your actual table and column names
-- and the values you want to check/update/insert.

MERGE INTO OAP_TRANSACTION_MASTER_T AS target
USING (SELECT 'value' AS column_name) AS source
ON (target.column_name = source.column_name)
WHEN MATCHED THEN
    UPDATE SET target.column_name = 'new_value'
WHEN NOT MATCHED THEN
    INSERT (column_name, other_columns)
    VALUES ('new_value', other_values);


UPDATE OAP_TRANSACTION_MASTER_T SET CURRENT_USER_NAME = :CURRENT_USER_NAME,TPSL_RQST_TOKEN = :TPSL_RQST_TOKEN,
        PAY_AMOUNT =:PAY_AMOUNT,CREATED_DATE = CURRENT_TIMESTAMP,PAYMENT_DETAIL_ID = :PAYMENT_DETAIL_ID,STATUS_MESSAGE = 'Initiated',
        PAYMENT_GATEWAY = :PG_VAL WHERE ID =:ID 