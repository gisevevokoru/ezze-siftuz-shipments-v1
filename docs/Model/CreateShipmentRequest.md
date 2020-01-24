# CreateShipmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_key** | [**\EzzeSiftuz\ShipmentsV1\Model\TrackingKey**](TrackingKey.md) |  | 
**ship_date** | [**\DateTime**](\DateTime.md) | The date that the shipment is handed over to the carrier. Must be a valid UTC dateTime according to ISO 8601. | 
**ship_from_address** | [**\EzzeSiftuz\ShipmentsV1\Model\Address**](Address.md) |  | 
**position_items** | [**\EzzeSiftuz\ShipmentsV1\Model\PositionItem[]**](PositionItem.md) | The position items included in shipment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

