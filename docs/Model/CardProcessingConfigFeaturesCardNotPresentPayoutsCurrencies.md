# CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  | [optional] 
**enabledCardPresent** | **bool** | Indicates whether the card-present transaction is activated for the selected currency. If both enabledCardPresent and enabledCardNotPresent are set to null, then enabledCardPresent will have the value of enabled. | [optional] 
**enabledCardNotPresent** | **bool** | Indicates whether the card-present transaction is activated for the selected currency. If both enabledCardPresent and enabledCardNotPresent are set to null, then enabledCardNotPresent will have the value of enabled. | [optional] 
**merchantId** | **string** | Merchant ID assigned by an acquirer or a processor. Should not be overriden by any other party. | [optional] 
**terminalId** | **string** | The &#39;Terminal Id&#39; aka TID, is an identifier used for with your payments processor. Depending on the processor and payment acceptance type this may also be the default Terminal ID used for Card Present and Virtual Terminal transactions. | [optional] 
**terminalIds** | **string[]** | Applicable for Prisma (prisma) processor. | [optional] 
**serviceEnablementNumber** | **string** | Service Establishment Number (a.k.a. SE Number) is a unique ten-digit number assigned by American Express to a merchant that accepts American Express cards. 10 digit number provided by acquirer currency. This may be unique for each currency, however it depends on the way the processor is set up for the merchant. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

