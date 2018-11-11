# Ptsv2payoutsSenderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**referenceNumber** | **string** | Reference number generated by you that uniquely identifies the sender. | [optional] 
**account** | [**\CyberSource\Model\Ptsv2payoutsSenderInformationAccount**](Ptsv2payoutsSenderInformationAccount.md) |  | [optional] 
**firstName** | **string** | First name of sender (Optional). * CTV (14) * Paymentech (30) | [optional] 
**middleInitial** | **string** | Recipient middle initial (Optional). | [optional] 
**lastName** | **string** | Recipient last name (Optional). * CTV (14) * Paymentech (30) | [optional] 
**name** | **string** | Name of sender.  **Funds Disbursement**  This value is the name of the originator sending the funds disbursement. * CTV, Paymentech (30) | [optional] 
**address1** | **string** | Street address of sender.  **Funds Disbursement**  This value is the address of the originator sending the funds disbursement. | [optional] 
**locality** | **string** | City of sender.  **Funds Disbursement**  This value is the city of the originator sending the funds disbursement. | [optional] 
**administrativeArea** | **string** | Sender’s state. Use the State, Province, and Territory Codes for the United States and Canada. | [optional] 
**countryCode** | **string** | Country of sender. Use the ISO Standard Country Codes. * CTV (3) | [optional] 
**postalCode** | **string** | Sender’s postal code. Required only for FDCCompass. | [optional] 
**phoneNumber** | **string** | Sender’s phone number. Required only for FDCCompass. | [optional] 
**dateOfBirth** | **string** | Sender’s date of birth in YYYYMMDD format. Required only for FDCCompass. | [optional] 
**vatRegistrationNumber** | **string** | Customer&#39;s government-assigned tax identification number. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

