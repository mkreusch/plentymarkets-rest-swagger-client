# OpenAPI\Client\ItemApi

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restAvailabilitiesGet**](ItemApi.md#restAvailabilitiesGet) | **GET** /rest/availabilities | List item availabilities
[**restAvailabilitiesIdGet**](ItemApi.md#restAvailabilitiesIdGet) | **GET** /rest/availabilities/{id} | Get an item availability
[**restAvailabilitiesIdPut**](ItemApi.md#restAvailabilitiesIdPut) | **PUT** /rest/availabilities/{id} | Update an item availability
[**restItemSetsDelete**](ItemApi.md#restItemSetsDelete) | **DELETE** /rest/item_sets | Delete item sets
[**restItemSetsGet**](ItemApi.md#restItemSetsGet) | **GET** /rest/item_sets | List item sets
[**restItemSetsIdDelete**](ItemApi.md#restItemSetsIdDelete) | **DELETE** /rest/item_sets/{id} | Delete an item set
[**restItemSetsIdGet**](ItemApi.md#restItemSetsIdGet) | **GET** /rest/item_sets/{id} | Get an item set
[**restItemSetsIdPut**](ItemApi.md#restItemSetsIdPut) | **PUT** /rest/item_sets/{id} | Update an item set
[**restItemSetsPost**](ItemApi.md#restItemSetsPost) | **POST** /rest/item_sets | Create item sets
[**restItemSetsPut**](ItemApi.md#restItemSetsPut) | **PUT** /rest/item_sets | Update item sets
[**restItemSetsSetIdComponentsDelete**](ItemApi.md#restItemSetsSetIdComponentsDelete) | **DELETE** /rest/item_sets/{setId}/components | Delete item set components
[**restItemSetsSetIdComponentsGet**](ItemApi.md#restItemSetsSetIdComponentsGet) | **GET** /rest/item_sets/{setId}/components | List item set components of an item set
[**restItemSetsSetIdComponentsIdDelete**](ItemApi.md#restItemSetsSetIdComponentsIdDelete) | **DELETE** /rest/item_sets/{setId}/components/{id} | Delete an item set component
[**restItemSetsSetIdComponentsIdGet**](ItemApi.md#restItemSetsSetIdComponentsIdGet) | **GET** /rest/item_sets/{setId}/components/{id} | Get an item set component
[**restItemSetsSetIdComponentsIdPut**](ItemApi.md#restItemSetsSetIdComponentsIdPut) | **PUT** /rest/item_sets/{setId}/components/{id} | Update an item set component
[**restItemSetsSetIdComponentsPost**](ItemApi.md#restItemSetsSetIdComponentsPost) | **POST** /rest/item_sets/{setId}/components | Create item set components
[**restItemSetsSetIdComponentsPut**](ItemApi.md#restItemSetsSetIdComponentsPut) | **PUT** /rest/item_sets/{setId}/components | Update item set components
[**restItemSetsSetIdConfigGet**](ItemApi.md#restItemSetsSetIdConfigGet) | **GET** /rest/item_sets/{setId}/config | Get the item set configuration of an item set
[**restItemSetsSetIdConfigPut**](ItemApi.md#restItemSetsSetIdConfigPut) | **PUT** /rest/item_sets/{setId}/config | Update an item set configuration
[**restItemsAttributeValuesValueIdNamesGet**](ItemApi.md#restItemsAttributeValuesValueIdNamesGet) | **GET** /rest/items/attribute_values/{valueId}/names | Get name and language for an attribute value ID
[**restItemsAttributeValuesValueIdNamesLangDelete**](ItemApi.md#restItemsAttributeValuesValueIdNamesLangDelete) | **DELETE** /rest/items/attribute_values/{valueId}/names/{lang} | Delete an attribute value name
[**restItemsAttributeValuesValueIdNamesLangGet**](ItemApi.md#restItemsAttributeValuesValueIdNamesLangGet) | **GET** /rest/items/attribute_values/{valueId}/names/{lang} | Get an attribute value name
[**restItemsAttributeValuesValueIdNamesLangPut**](ItemApi.md#restItemsAttributeValuesValueIdNamesLangPut) | **PUT** /rest/items/attribute_values/{valueId}/names/{lang} | Update an attribute value name
[**restItemsAttributeValuesValueIdNamesPost**](ItemApi.md#restItemsAttributeValuesValueIdNamesPost) | **POST** /rest/items/attribute_values/{valueId}/names | Create an attribute value name
[**restItemsAttributesAttributeIdMarketsMarketIdMapsDelete**](ItemApi.md#restItemsAttributesAttributeIdMarketsMarketIdMapsDelete) | **DELETE** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Deletes an attribute map.
[**restItemsAttributesAttributeIdMarketsMarketIdMapsGet**](ItemApi.md#restItemsAttributesAttributeIdMarketsMarketIdMapsGet) | **GET** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Gets an attribute map.
[**restItemsAttributesAttributeIdMarketsMarketIdMapsPut**](ItemApi.md#restItemsAttributesAttributeIdMarketsMarketIdMapsPut) | **PUT** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Updates an attribute map.
[**restItemsAttributesAttributeIdNamesGet**](ItemApi.md#restItemsAttributesAttributeIdNamesGet) | **GET** /rest/items/attributes/{attributeId}/names | Get an attribute name
[**restItemsAttributesAttributeIdNamesLangDelete**](ItemApi.md#restItemsAttributesAttributeIdNamesLangDelete) | **DELETE** /rest/items/attributes/{attributeId}/names/{lang} | Delete an attribute name
[**restItemsAttributesAttributeIdNamesLangGet**](ItemApi.md#restItemsAttributesAttributeIdNamesLangGet) | **GET** /rest/items/attributes/{attributeId}/names/{lang} | List attribute names
[**restItemsAttributesAttributeIdNamesLangPut**](ItemApi.md#restItemsAttributesAttributeIdNamesLangPut) | **PUT** /rest/items/attributes/{attributeId}/names/{lang} | Update an attribute name
[**restItemsAttributesAttributeIdNamesPost**](ItemApi.md#restItemsAttributesAttributeIdNamesPost) | **POST** /rest/items/attributes/{attributeId}/names | Create an attribute name
[**restItemsAttributesAttributeIdValueMarketNamesGet**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesGet) | **GET** /rest/items/attributes/{attributeId}/value_market_names | Search attribute value market names
[**restItemsAttributesAttributeIdValueMarketNamesPost**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesPost) | **POST** /rest/items/attributes/{attributeId}/value_market_names | Create an attribute value market name
[**restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete) | **DELETE** /rest/items/attributes/{attributeId}/value_market_names/{valueId}/{lang}/{referenceType} | Delete an attribute value market name
[**restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut) | **PUT** /rest/items/attributes/{attributeId}/value_market_names/{valueId}/{lang}/{referenceType} | Update an attribute value market name
[**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete**](ItemApi.md#restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete) | **DELETE** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Deletes an attribute value map.
[**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet**](ItemApi.md#restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet) | **GET** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Gets an attribute value map.
[**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut**](ItemApi.md#restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut) | **PUT** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Updates an attribute value map.
[**restItemsAttributesAttributeIdValuesGet**](ItemApi.md#restItemsAttributesAttributeIdValuesGet) | **GET** /rest/items/attributes/{attributeId}/values | List attribute values
[**restItemsAttributesAttributeIdValuesIdDelete**](ItemApi.md#restItemsAttributesAttributeIdValuesIdDelete) | **DELETE** /rest/items/attributes/{attributeId}/values/{id} | Delete an attribute value
[**restItemsAttributesAttributeIdValuesIdGet**](ItemApi.md#restItemsAttributesAttributeIdValuesIdGet) | **GET** /rest/items/attributes/{attributeId}/values/{id} | Get an attribute value
[**restItemsAttributesAttributeIdValuesIdPut**](ItemApi.md#restItemsAttributesAttributeIdValuesIdPut) | **PUT** /rest/items/attributes/{attributeId}/values/{id} | Update an attribute value
[**restItemsAttributesAttributeIdValuesPost**](ItemApi.md#restItemsAttributesAttributeIdValuesPost) | **POST** /rest/items/attributes/{attributeId}/values | Create an attribute value
[**restItemsAttributesGet**](ItemApi.md#restItemsAttributesGet) | **GET** /rest/items/attributes | List attributes
[**restItemsAttributesIdDelete**](ItemApi.md#restItemsAttributesIdDelete) | **DELETE** /rest/items/attributes/{id} | Delete an attribute
[**restItemsAttributesIdGet**](ItemApi.md#restItemsAttributesIdGet) | **GET** /rest/items/attributes/{id} | Get an attribute
[**restItemsAttributesIdPut**](ItemApi.md#restItemsAttributesIdPut) | **PUT** /rest/items/attributes/{id} | Update an attribute
[**restItemsAttributesMapsGet**](ItemApi.md#restItemsAttributesMapsGet) | **GET** /rest/items/attributes/maps | Lists all attribute maps.
[**restItemsAttributesMarketsMapsPost**](ItemApi.md#restItemsAttributesMarketsMapsPost) | **POST** /rest/items/attributes/markets/maps | Creates a new attribute map.
[**restItemsAttributesPost**](ItemApi.md#restItemsAttributesPost) | **POST** /rest/items/attributes | Create an attribute
[**restItemsAttributesValuesMapsGet**](ItemApi.md#restItemsAttributesValuesMapsGet) | **GET** /rest/items/attributes/values/maps | Lists all attribute value maps.
[**restItemsAttributesValuesMarketsMapsPost**](ItemApi.md#restItemsAttributesValuesMarketsMapsPost) | **POST** /rest/items/attributes/values/markets/maps | Creates a new attribute value map.
[**restItemsBarcodesBarcodeIdDelete**](ItemApi.md#restItemsBarcodesBarcodeIdDelete) | **DELETE** /rest/items/barcodes/{barcodeId} | Delete a barcode
[**restItemsBarcodesBarcodeIdGet**](ItemApi.md#restItemsBarcodesBarcodeIdGet) | **GET** /rest/items/barcodes/{barcodeId} | Get a barcode
[**restItemsBarcodesBarcodeIdPut**](ItemApi.md#restItemsBarcodesBarcodeIdPut) | **PUT** /rest/items/barcodes/{barcodeId} | Update a barcode
[**restItemsBarcodesBarcodeIdReferrerPost**](ItemApi.md#restItemsBarcodesBarcodeIdReferrerPost) | **POST** /rest/items/barcodes/{barcodeId}/referrer | Activate a referrer
[**restItemsBarcodesBarcodeIdReferrerReferrerIdDelete**](ItemApi.md#restItemsBarcodesBarcodeIdReferrerReferrerIdDelete) | **DELETE** /rest/items/barcodes/{barcodeId}/referrer/{referrerId} | Deactivate a referrer
[**restItemsBarcodesGet**](ItemApi.md#restItemsBarcodesGet) | **GET** /rest/items/barcodes | List barcodes
[**restItemsBarcodesPost**](ItemApi.md#restItemsBarcodesPost) | **POST** /rest/items/barcodes | Create a barcode
[**restItemsBarcodesReferrerReferrerIdGet**](ItemApi.md#restItemsBarcodesReferrerReferrerIdGet) | **GET** /rest/items/barcodes/referrer/{referrerId} | List barcodes by referrer
[**restItemsBarcodesTypeTypeGet**](ItemApi.md#restItemsBarcodesTypeTypeGet) | **GET** /rest/items/barcodes/type/{type} | List barcodes by type
[**restItemsGet**](ItemApi.md#restItemsGet) | **GET** /rest/items | Search item
[**restItemsIdImagesAttributeValueMarketsGet**](ItemApi.md#restItemsIdImagesAttributeValueMarketsGet) | **GET** /rest/items/{id}/images/attribute_value_markets | List attribute value image link
[**restItemsIdImagesGet**](ItemApi.md#restItemsIdImagesGet) | **GET** /rest/items/{id}/images | List images of an item
[**restItemsIdImagesImageIdAttributeValueMarketsPost**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsPost) | **POST** /rest/items/{id}/images/{imageId}/attribute_value_markets | Create an attribute value image link
[**restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete) | **DELETE** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Delete an attribute value image link
[**restItemsIdImagesImageIdAttributeValueMarketsValueIdGet**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsValueIdGet) | **GET** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Get an attribute value image link
[**restItemsIdImagesImageIdAttributeValueMarketsValueIdPut**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsValueIdPut) | **PUT** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Update an attribute value image link
[**restItemsIdImagesImageIdAvailabilitiesDelete**](ItemApi.md#restItemsIdImagesImageIdAvailabilitiesDelete) | **DELETE** /rest/items/{id}/images/{imageId}/availabilities | Delete an availability
[**restItemsIdImagesImageIdAvailabilitiesGet**](ItemApi.md#restItemsIdImagesImageIdAvailabilitiesGet) | **GET** /rest/items/{id}/images/{imageId}/availabilities | List availabilities
[**restItemsIdImagesImageIdAvailabilitiesPost**](ItemApi.md#restItemsIdImagesImageIdAvailabilitiesPost) | **POST** /rest/items/{id}/images/{imageId}/availabilities | Create an availability
[**restItemsIdImagesImageIdDelete**](ItemApi.md#restItemsIdImagesImageIdDelete) | **DELETE** /rest/items/{id}/images/{imageId} | Delete an image
[**restItemsIdImagesImageIdGet**](ItemApi.md#restItemsIdImagesImageIdGet) | **GET** /rest/items/{id}/images/{imageId} | Get an image
[**restItemsIdImagesImageIdNamesGet**](ItemApi.md#restItemsIdImagesImageIdNamesGet) | **GET** /rest/items/{id}/images/{imageId}/names | List names of an image
[**restItemsIdImagesImageIdNamesLangDelete**](ItemApi.md#restItemsIdImagesImageIdNamesLangDelete) | **DELETE** /rest/items/{id}/images/{imageId}/names/{lang} | Delete an image name
[**restItemsIdImagesImageIdNamesLangGet**](ItemApi.md#restItemsIdImagesImageIdNamesLangGet) | **GET** /rest/items/{id}/images/{imageId}/names/{lang} | Get an image name
[**restItemsIdImagesImageIdNamesLangPut**](ItemApi.md#restItemsIdImagesImageIdNamesLangPut) | **PUT** /rest/items/{id}/images/{imageId}/names/{lang} | Update an image name
[**restItemsIdImagesImageIdNamesPost**](ItemApi.md#restItemsIdImagesImageIdNamesPost) | **POST** /rest/items/{id}/images/{imageId}/names | Create an image name
[**restItemsIdImagesImageIdPut**](ItemApi.md#restItemsIdImagesImageIdPut) | **PUT** /rest/items/{id}/images/{imageId} | Update an image
[**restItemsIdImagesImageIdVariationImagesGet**](ItemApi.md#restItemsIdImagesImageIdVariationImagesGet) | **GET** /rest/items/{id}/images/{imageId}/variation_images | List image links of an image
[**restItemsIdImagesUploadPost**](ItemApi.md#restItemsIdImagesUploadPost) | **POST** /rest/items/{id}/images/upload | Upload a new image
[**restItemsIdItemCrossSellingCrossItemIdDelete**](ItemApi.md#restItemsIdItemCrossSellingCrossItemIdDelete) | **DELETE** /rest/items/{id}/item_cross_selling/{crossItemId} | Delete a cross-selling link
[**restItemsIdItemCrossSellingGet**](ItemApi.md#restItemsIdItemCrossSellingGet) | **GET** /rest/items/{id}/item_cross_selling | List cross-selling links
[**restItemsIdItemCrossSellingPost**](ItemApi.md#restItemsIdItemCrossSellingPost) | **POST** /rest/items/{id}/item_cross_selling | Create a cross-selling link
[**restItemsIdVariationImagesGet**](ItemApi.md#restItemsIdVariationImagesGet) | **GET** /rest/items/{id}/variation_images | List image links of an item
[**restItemsIdVariationsVariationIdDescriptionsGet**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsGet) | **GET** /rest/items/{id}/variations/{variationId}/descriptions | List texts
[**restItemsIdVariationsVariationIdDescriptionsLangDelete**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsLangDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Delete texts
[**restItemsIdVariationsVariationIdDescriptionsLangGet**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsLangGet) | **GET** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Get texts
[**restItemsIdVariationsVariationIdDescriptionsLangPut**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsLangPut) | **PUT** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Update texts
[**restItemsIdVariationsVariationIdDescriptionsPost**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsPost) | **POST** /rest/items/{id}/variations/{variationId}/descriptions | Create texts
[**restItemsIdVariationsVariationIdImagesGet**](ItemApi.md#restItemsIdVariationsVariationIdImagesGet) | **GET** /rest/items/{id}/variations/{variationId}/images | List images of a variation
[**restItemsIdVariationsVariationIdLabelsPost**](ItemApi.md#restItemsIdVariationsVariationIdLabelsPost) | **POST** /rest/items/{id}/variations/{variationId}/labels | Get a variation label
[**restItemsIdVariationsVariationIdMarketIdentNumbersGet**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersGet) | **GET** /rest/items/{id}/variations/{variationId}/market_ident_numbers | List ident number of a variation
[**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Deletes a market ident number
[**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet) | **GET** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Get a market ident number
[**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Updates a market ident number
[**restItemsIdVariationsVariationIdMarketIdentNumbersPost**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersPost) | **POST** /rest/items/{id}/variations/{variationId}/market_ident_numbers | Create a market ident number
[**restItemsIdVariationsVariationIdStockBookIncomingItemsPut**](ItemApi.md#restItemsIdVariationsVariationIdStockBookIncomingItemsPut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/bookIncomingItems | Book incoming stock
[**restItemsIdVariationsVariationIdStockBookOutgoingItemsPut**](ItemApi.md#restItemsIdVariationsVariationIdStockBookOutgoingItemsPut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/bookOutgoingItems | Book outgoing stock
[**restItemsIdVariationsVariationIdStockCorrectionPut**](ItemApi.md#restItemsIdVariationsVariationIdStockCorrectionPut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/correction | Correct stock
[**restItemsIdVariationsVariationIdStockGet**](ItemApi.md#restItemsIdVariationsVariationIdStockGet) | **GET** /rest/items/{id}/variations/{variationId}/stock | List stock of a variation per warehouse
[**restItemsIdVariationsVariationIdStockMovementsGet**](ItemApi.md#restItemsIdVariationsVariationIdStockMovementsGet) | **GET** /rest/items/{id}/variations/{variationId}/stock/movements | List stock movements
[**restItemsIdVariationsVariationIdStockRedistributePut**](ItemApi.md#restItemsIdVariationsVariationIdStockRedistributePut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/redistribute | Redistribute stock
[**restItemsIdVariationsVariationIdStockStorageLocationsGet**](ItemApi.md#restItemsIdVariationsVariationIdStockStorageLocationsGet) | **GET** /rest/items/{id}/variations/{variationId}/stock/storageLocations | List stock of a variation per storage locations
[**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Delete an additional SKU
[**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Gets an additional SKU
[**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Update an additional SKU
[**restItemsIdVariationsVariationIdVariationAdditionalSkusGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_additional_skus | List additional SKUs
[**restItemsIdVariationsVariationIdVariationAdditionalSkusPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_additional_skus | Create an additional SKU
[**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Delete a variation barcode
[**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Get a variation barcode
[**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Update a variation barcode
[**restItemsIdVariationsVariationIdVariationBarcodesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_barcodes | List variation barcodes
[**restItemsIdVariationsVariationIdVariationBarcodesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_barcodes | Create a variation barcode
[**restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Remove a bundle component
[**restItemsIdVariationsVariationIdVariationBundlesBundleIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesBundleIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Get a variation bundle
[**restItemsIdVariationsVariationIdVariationBundlesBundleIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesBundleIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Update a variation bundle
[**restItemsIdVariationsVariationIdVariationBundlesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_bundles | List bundle components
[**restItemsIdVariationsVariationIdVariationBundlesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_bundles | Add a variation to a bundle
[**restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Remove a category from a variation
[**restItemsIdVariationsVariationIdVariationCategoriesCatIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesCatIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Get link between category and variation
[**restItemsIdVariationsVariationIdVariationCategoriesCatIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesCatIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Update variation category link
[**restItemsIdVariationsVariationIdVariationCategoriesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_categories | List categories linked to a variation
[**restItemsIdVariationsVariationIdVariationCategoriesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_categories | Link a category to a variation
[**restItemsIdVariationsVariationIdVariationClientsGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationClientsGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_clients | List clients linked to a variation
[**restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_clients/{plentyId} | Unlink a client from a variation
[**restItemsIdVariationsVariationIdVariationClientsPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationClientsPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_clients | Link a client to a variation
[**restItemsIdVariationsVariationIdVariationComponentBundlesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationComponentBundlesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_component_bundles | List bundles
[**restItemsIdVariationsVariationIdVariationDefaultCategoriesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_default_categories | List default category links
[**restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_default_categories/{plentyId} | Delete a default category link
[**restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_default_categories/{plentyId} | Gets a default category link
[**restItemsIdVariationsVariationIdVariationDefaultCategoriesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_default_categories | Create a default category link
[**restItemsIdVariationsVariationIdVariationImagesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationImagesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_images | List image links of a variation
[**restItemsIdVariationsVariationIdVariationImagesImageIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationImagesImageIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_images/{imageId} | Delete an image link
[**restItemsIdVariationsVariationIdVariationImagesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationImagesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_images | Create an image link
[**restItemsIdVariationsVariationIdVariationMarketsDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_markets | Delete all market links of one variation
[**restItemsIdVariationsVariationIdVariationMarketsGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_markets | List markets linked to a variation
[**restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_markets/{marketplaceId} | Delete link between variation and market
[**restItemsIdVariationsVariationIdVariationMarketsPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_markets | Create link between variation and market
[**restItemsIdVariationsVariationIdVariationPropertiesDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_properties | Deletes all links between a variation and its property values
[**restItemsIdVariationsVariationIdVariationPropertiesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_properties | List property values linked to a variation
[**restItemsIdVariationsVariationIdVariationPropertiesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_properties | Create link between variation and property value
[**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Delete link between variation and property value
[**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Get a property value
[**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Update a property value
[**restItemsIdVariationsVariationIdVariationSalesPricesDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_sales_prices | Delete all links between a variation and its sales prices
[**restItemsIdVariationsVariationIdVariationSalesPricesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_sales_prices | List sales prices of a variation
[**restItemsIdVariationsVariationIdVariationSalesPricesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_sales_prices | Create link between variation and sales price
[**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Delete link between variation and sales price
[**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Get sales price data for a variation
[**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Update sales price data
[**restItemsIdVariationsVariationIdVariationSkusGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_skus | List SKUs
[**restItemsIdVariationsVariationIdVariationSkusPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_skus | Create an SKU
[**restItemsIdVariationsVariationIdVariationSkusSkuIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusSkuIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Delete an SKU
[**restItemsIdVariationsVariationIdVariationSkusSkuIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusSkuIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Get an SKU
[**restItemsIdVariationsVariationIdVariationSkusSkuIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusSkuIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Update an SKU
[**restItemsIdVariationsVariationIdVariationSuppliersGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_suppliers | Lists suppliers for a variation
[**restItemsIdVariationsVariationIdVariationSuppliersPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_suppliers | Create a link between variation and supplier
[**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Delete link between variation and supplier
[**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Get supplier data for a variation
[**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Updates supplier data for a variation
[**restItemsIdVariationsVariationIdVariationWarehousesGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_warehouses | List the warehouses linked to a variation
[**restItemsIdVariationsVariationIdVariationWarehousesPost**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_warehouses | Create link between a variation and a warehouse
[**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Delete link between a warehouse and a variation
[**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Get warehouse data for a variation
[**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Update warehouse data of a variation
[**restItemsItemIdDelete**](ItemApi.md#restItemsItemIdDelete) | **DELETE** /rest/items/{itemId} | Delete an item
[**restItemsItemIdFillPost**](ItemApi.md#restItemsItemIdFillPost) | **POST** /rest/items/{itemId}/fill | Fill item to es
[**restItemsItemIdGet**](ItemApi.md#restItemsItemIdGet) | **GET** /rest/items/{itemId} | Show an item
[**restItemsItemIdItemShippingProfilesDelete**](ItemApi.md#restItemsItemIdItemShippingProfilesDelete) | **DELETE** /rest/items/{itemId}/item_shipping_profiles | Deactivate shipping profiles of an item
[**restItemsItemIdItemShippingProfilesGet**](ItemApi.md#restItemsItemIdItemShippingProfilesGet) | **GET** /rest/items/{itemId}/item_shipping_profiles | List shipping profiles of an item
[**restItemsItemIdItemShippingProfilesIdDelete**](ItemApi.md#restItemsItemIdItemShippingProfilesIdDelete) | **DELETE** /rest/items/{itemId}/item_shipping_profiles/{id} | Deactivate a shipping profile
[**restItemsItemIdItemShippingProfilesPost**](ItemApi.md#restItemsItemIdItemShippingProfilesPost) | **POST** /rest/items/{itemId}/item_shipping_profiles | Activate a shipping profile
[**restItemsItemIdPut**](ItemApi.md#restItemsItemIdPut) | **PUT** /rest/items/{itemId} | Update a item
[**restItemsItemIdVariationsGet**](ItemApi.md#restItemsItemIdVariationsGet) | **GET** /rest/items/{itemId}/variations | List variations of an item
[**restItemsItemIdVariationsPost**](ItemApi.md#restItemsItemIdVariationsPost) | **POST** /rest/items/{itemId}/variations | Create a variation
[**restItemsItemIdVariationsVariationIdDelete**](ItemApi.md#restItemsItemIdVariationsVariationIdDelete) | **DELETE** /rest/items/{itemId}/variations/{variationId} | Delete a variation
[**restItemsItemIdVariationsVariationIdFillPost**](ItemApi.md#restItemsItemIdVariationsVariationIdFillPost) | **POST** /rest/items/{itemId}/variations/{variationId}/fill | Fill a variation
[**restItemsItemIdVariationsVariationIdGet**](ItemApi.md#restItemsItemIdVariationsVariationIdGet) | **GET** /rest/items/{itemId}/variations/{variationId} | Get a variation
[**restItemsItemIdVariationsVariationIdPut**](ItemApi.md#restItemsItemIdVariationsVariationIdPut) | **PUT** /rest/items/{itemId}/variations/{variationId} | Update a variation
[**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet) | **GET** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts | Get property value texts
[**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete) | **DELETE** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Delete property value text by language
[**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet) | **GET** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Get property value text by language
[**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut) | **PUT** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Update property value text by language
[**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost) | **POST** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts | Create property value text by language
[**restItemsItemShippingProfilesGet**](ItemApi.md#restItemsItemShippingProfilesGet) | **GET** /rest/items/item_shipping_profiles | List all shipping profiles of all items
[**restItemsItemShippingProfilesPost**](ItemApi.md#restItemsItemShippingProfilesPost) | **POST** /rest/items/item_shipping_profiles | Bulk activate shipping profiles
[**restItemsLabelsGet**](ItemApi.md#restItemsLabelsGet) | **GET** /rest/items/labels | List item label templates
[**restItemsManufacturersGet**](ItemApi.md#restItemsManufacturersGet) | **GET** /rest/items/manufacturers | List manufacturers
[**restItemsManufacturersIdCommissionsGet**](ItemApi.md#restItemsManufacturersIdCommissionsGet) | **GET** /rest/items/manufacturers/{id}/commissions | List commissions
[**restItemsManufacturersIdCommissionsManufacturerIdDelete**](ItemApi.md#restItemsManufacturersIdCommissionsManufacturerIdDelete) | **DELETE** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Delete a commission
[**restItemsManufacturersIdCommissionsManufacturerIdGet**](ItemApi.md#restItemsManufacturersIdCommissionsManufacturerIdGet) | **GET** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Get a commission
[**restItemsManufacturersIdCommissionsManufacturerIdPut**](ItemApi.md#restItemsManufacturersIdCommissionsManufacturerIdPut) | **PUT** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Update a commission
[**restItemsManufacturersIdCommissionsPost**](ItemApi.md#restItemsManufacturersIdCommissionsPost) | **POST** /rest/items/manufacturers/{id}/commissions | Create a commission
[**restItemsManufacturersIdDelete**](ItemApi.md#restItemsManufacturersIdDelete) | **DELETE** /rest/items/manufacturers/{id} | Delete a manufacturer
[**restItemsManufacturersIdGet**](ItemApi.md#restItemsManufacturersIdGet) | **GET** /rest/items/manufacturers/{id} | Get a manufacturer
[**restItemsManufacturersIdPut**](ItemApi.md#restItemsManufacturersIdPut) | **PUT** /rest/items/manufacturers/{id} | Update a manufacturer
[**restItemsManufacturersPost**](ItemApi.md#restItemsManufacturersPost) | **POST** /rest/items/manufacturers | Create a manufacturer
[**restItemsPackingUnitsGet**](ItemApi.md#restItemsPackingUnitsGet) | **GET** /rest/items/packing_units | Get the item variation packing units
[**restItemsPackingUnitsIdGet**](ItemApi.md#restItemsPackingUnitsIdGet) | **GET** /rest/items/packing_units/{id} | Get the item variation packing unit for a specific given id
[**restItemsPost**](ItemApi.md#restItemsPost) | **POST** /rest/items | Create new items
[**restItemsPropertiesGet**](ItemApi.md#restItemsPropertiesGet) | **GET** /rest/items/properties | List properties
[**restItemsPropertiesIdDelete**](ItemApi.md#restItemsPropertiesIdDelete) | **DELETE** /rest/items/properties/{id} | Delete a property
[**restItemsPropertiesIdGet**](ItemApi.md#restItemsPropertiesIdGet) | **GET** /rest/items/properties/{id} | Get a property
[**restItemsPropertiesIdMarketReferencesGet**](ItemApi.md#restItemsPropertiesIdMarketReferencesGet) | **GET** /rest/items/properties/{id}/market_references | List property market references
[**restItemsPropertiesIdMarketReferencesMarketIdDelete**](ItemApi.md#restItemsPropertiesIdMarketReferencesMarketIdDelete) | **DELETE** /rest/items/properties/{id}/market_references/{marketId} | Delete a property market reference
[**restItemsPropertiesIdMarketReferencesMarketIdGet**](ItemApi.md#restItemsPropertiesIdMarketReferencesMarketIdGet) | **GET** /rest/items/properties/{id}/market_references/{marketId} | Get a property market reference
[**restItemsPropertiesIdMarketReferencesMarketIdPut**](ItemApi.md#restItemsPropertiesIdMarketReferencesMarketIdPut) | **PUT** /rest/items/properties/{id}/market_references/{marketId} | Update a property market reference
[**restItemsPropertiesIdMarketReferencesPost**](ItemApi.md#restItemsPropertiesIdMarketReferencesPost) | **POST** /rest/items/properties/{id}/market_references | Create a property market reference
[**restItemsPropertiesIdNamesGet**](ItemApi.md#restItemsPropertiesIdNamesGet) | **GET** /rest/items/properties/{id}/names | List the property names
[**restItemsPropertiesIdNamesLangDelete**](ItemApi.md#restItemsPropertiesIdNamesLangDelete) | **DELETE** /rest/items/properties/{id}/names/{lang} | Delete a property name
[**restItemsPropertiesIdNamesLangGet**](ItemApi.md#restItemsPropertiesIdNamesLangGet) | **GET** /rest/items/properties/{id}/names/{lang} | Get a property name
[**restItemsPropertiesIdNamesLangPut**](ItemApi.md#restItemsPropertiesIdNamesLangPut) | **PUT** /rest/items/properties/{id}/names/{lang} | Update a property name
[**restItemsPropertiesIdNamesPost**](ItemApi.md#restItemsPropertiesIdNamesPost) | **POST** /rest/items/properties/{id}/names | Create a property name
[**restItemsPropertiesIdPut**](ItemApi.md#restItemsPropertiesIdPut) | **PUT** /rest/items/properties/{id} | Update a property
[**restItemsPropertiesPost**](ItemApi.md#restItemsPropertiesPost) | **POST** /rest/items/properties | Create a property
[**restItemsPropertiesPropertyIdSelectionsGet**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsGet) | **GET** /rest/items/properties/{propertyId}/selections | List property selections
[**restItemsPropertiesPropertyIdSelectionsIdDelete**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdDelete) | **DELETE** /rest/items/properties/{propertyId}/selections/{id} | Delete a property selection
[**restItemsPropertiesPropertyIdSelectionsIdGet**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdGet) | **GET** /rest/items/properties/{propertyId}/selections/{id} | Get a property selection
[**restItemsPropertiesPropertyIdSelectionsIdLangDelete**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdLangDelete) | **DELETE** /rest/items/properties/{propertyId}/selections/{id}/{lang} | Delete a property selection language
[**restItemsPropertiesPropertyIdSelectionsIdLangGet**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdLangGet) | **GET** /rest/items/properties/{propertyId}/selections/{id}/{lang} | List property selections by language
[**restItemsPropertiesPropertyIdSelectionsIdLangPut**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdLangPut) | **PUT** /rest/items/properties/{propertyId}/selections/{id}/{lang} | Update a property selection
[**restItemsPropertiesPropertyIdSelectionsIdPost**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdPost) | **POST** /rest/items/properties/{propertyId}/selections/{id} | Creates a property selection lang
[**restItemsPropertiesPropertyIdSelectionsLangGet**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsLangGet) | **GET** /rest/items/properties/{propertyId}/selections/{lang} | List property selections
[**restItemsPropertiesPropertyIdSelectionsPost**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsPost) | **POST** /rest/items/properties/{propertyId}/selections | Create a property selection
[**restItemsPropertyGroupsGet**](ItemApi.md#restItemsPropertyGroupsGet) | **GET** /rest/items/property_groups | List property groups
[**restItemsPropertyGroupsIdDelete**](ItemApi.md#restItemsPropertyGroupsIdDelete) | **DELETE** /rest/items/property_groups/{id} | Delete a property group
[**restItemsPropertyGroupsIdGet**](ItemApi.md#restItemsPropertyGroupsIdGet) | **GET** /rest/items/property_groups/{id} | Get a property group
[**restItemsPropertyGroupsIdNamesGet**](ItemApi.md#restItemsPropertyGroupsIdNamesGet) | **GET** /rest/items/property_groups/{id}/names | List the property group names of a property group
[**restItemsPropertyGroupsIdNamesLangDelete**](ItemApi.md#restItemsPropertyGroupsIdNamesLangDelete) | **DELETE** /rest/items/property_groups/{id}/names/{lang} | Delete a property group name
[**restItemsPropertyGroupsIdNamesLangGet**](ItemApi.md#restItemsPropertyGroupsIdNamesLangGet) | **GET** /rest/items/property_groups/{id}/names/{lang} | Get a property group name in a language
[**restItemsPropertyGroupsIdNamesLangPut**](ItemApi.md#restItemsPropertyGroupsIdNamesLangPut) | **PUT** /rest/items/property_groups/{id}/names/{lang} | Update a property group name
[**restItemsPropertyGroupsIdNamesPost**](ItemApi.md#restItemsPropertyGroupsIdNamesPost) | **POST** /rest/items/property_groups/{id}/names | Create a property group name
[**restItemsPropertyGroupsIdPut**](ItemApi.md#restItemsPropertyGroupsIdPut) | **PUT** /rest/items/property_groups/{id} | Update a property group
[**restItemsPropertyGroupsPost**](ItemApi.md#restItemsPropertyGroupsPost) | **POST** /rest/items/property_groups | Create a property group
[**restItemsPut**](ItemApi.md#restItemsPut) | **PUT** /rest/items | Bulk update items
[**restItemsSalesPricesGet**](ItemApi.md#restItemsSalesPricesGet) | **GET** /rest/items/sales_prices | List sales prices
[**restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete**](ItemApi.md#restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete) | **DELETE** /rest/items/sales_prices/{id}/accounts/{accountType}/{accountId} | Deactivate a referrer account
[**restItemsSalesPricesIdAccountsGet**](ItemApi.md#restItemsSalesPricesIdAccountsGet) | **GET** /rest/items/sales_prices/{id}/accounts | List referrer accounts
[**restItemsSalesPricesIdAccountsPost**](ItemApi.md#restItemsSalesPricesIdAccountsPost) | **POST** /rest/items/sales_prices/{id}/accounts | Activate a referrer account
[**restItemsSalesPricesIdCountriesCountryIdDelete**](ItemApi.md#restItemsSalesPricesIdCountriesCountryIdDelete) | **DELETE** /rest/items/sales_prices/{id}/countries/{countryId} | Deactivate a country
[**restItemsSalesPricesIdCountriesGet**](ItemApi.md#restItemsSalesPricesIdCountriesGet) | **GET** /rest/items/sales_prices/{id}/countries | List countries by sales price
[**restItemsSalesPricesIdCountriesPost**](ItemApi.md#restItemsSalesPricesIdCountriesPost) | **POST** /rest/items/sales_prices/{id}/countries | Activate a country
[**restItemsSalesPricesIdCurrenciesCurrencyDelete**](ItemApi.md#restItemsSalesPricesIdCurrenciesCurrencyDelete) | **DELETE** /rest/items/sales_prices/{id}/currencies/{currency} | Deactivate a currency
[**restItemsSalesPricesIdCurrenciesGet**](ItemApi.md#restItemsSalesPricesIdCurrenciesGet) | **GET** /rest/items/sales_prices/{id}/currencies | List activated currencies
[**restItemsSalesPricesIdCurrenciesPost**](ItemApi.md#restItemsSalesPricesIdCurrenciesPost) | **POST** /rest/items/sales_prices/{id}/currencies | Activate a currency
[**restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete**](ItemApi.md#restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete) | **DELETE** /rest/items/sales_prices/{id}/customer_classes/{customerClassId} | Activate a customer class
[**restItemsSalesPricesIdCustomerClassesGet**](ItemApi.md#restItemsSalesPricesIdCustomerClassesGet) | **GET** /rest/items/sales_prices/{id}/customer_classes | List activated customer classes
[**restItemsSalesPricesIdCustomerClassesPost**](ItemApi.md#restItemsSalesPricesIdCustomerClassesPost) | **POST** /rest/items/sales_prices/{id}/customer_classes | Activate a customer class
[**restItemsSalesPricesIdDelete**](ItemApi.md#restItemsSalesPricesIdDelete) | **DELETE** /rest/items/sales_prices/{id} | Delete a sales price
[**restItemsSalesPricesIdGet**](ItemApi.md#restItemsSalesPricesIdGet) | **GET** /rest/items/sales_prices/{id} | Get a sales price
[**restItemsSalesPricesIdNamesGet**](ItemApi.md#restItemsSalesPricesIdNamesGet) | **GET** /rest/items/sales_prices/{id}/names | List names of a sales price
[**restItemsSalesPricesIdNamesLangDelete**](ItemApi.md#restItemsSalesPricesIdNamesLangDelete) | **DELETE** /rest/items/sales_prices/{id}/names/{lang} | Delete a sales price name
[**restItemsSalesPricesIdNamesLangGet**](ItemApi.md#restItemsSalesPricesIdNamesLangGet) | **GET** /rest/items/sales_prices/{id}/names/{lang} | Gets a sales price name
[**restItemsSalesPricesIdNamesLangPut**](ItemApi.md#restItemsSalesPricesIdNamesLangPut) | **PUT** /rest/items/sales_prices/{id}/names/{lang} | Update a sales price name
[**restItemsSalesPricesIdNamesPost**](ItemApi.md#restItemsSalesPricesIdNamesPost) | **POST** /rest/items/sales_prices/{id}/names | Create a sales price name
[**restItemsSalesPricesIdOnlineStoresGet**](ItemApi.md#restItemsSalesPricesIdOnlineStoresGet) | **GET** /rest/items/sales_prices/{id}/online_stores | List activated clients (stores)
[**restItemsSalesPricesIdOnlineStoresPost**](ItemApi.md#restItemsSalesPricesIdOnlineStoresPost) | **POST** /rest/items/sales_prices/{id}/online_stores | Activate a client (store)
[**restItemsSalesPricesIdOnlineStoresWebstoreIdDelete**](ItemApi.md#restItemsSalesPricesIdOnlineStoresWebstoreIdDelete) | **DELETE** /rest/items/sales_prices/{id}/online_stores/{webstoreId} | Deactivate a client (store)
[**restItemsSalesPricesIdPut**](ItemApi.md#restItemsSalesPricesIdPut) | **PUT** /rest/items/sales_prices/{id} | Update a sales price
[**restItemsSalesPricesIdReferrersGet**](ItemApi.md#restItemsSalesPricesIdReferrersGet) | **GET** /rest/items/sales_prices/{id}/referrers | List activated referrers
[**restItemsSalesPricesIdReferrersPost**](ItemApi.md#restItemsSalesPricesIdReferrersPost) | **POST** /rest/items/sales_prices/{id}/referrers | Activate a referrer
[**restItemsSalesPricesIdReferrersReferrerIdDelete**](ItemApi.md#restItemsSalesPricesIdReferrersReferrerIdDelete) | **DELETE** /rest/items/sales_prices/{id}/referrers/{referrerId} | Deactivates a referrer
[**restItemsSalesPricesPost**](ItemApi.md#restItemsSalesPricesPost) | **POST** /rest/items/sales_prices | Create a sales price
[**restItemsUnitsGet**](ItemApi.md#restItemsUnitsGet) | **GET** /rest/items/units | List units
[**restItemsUnitsIdDelete**](ItemApi.md#restItemsUnitsIdDelete) | **DELETE** /rest/items/units/{id} | Delete a unit
[**restItemsUnitsIdGet**](ItemApi.md#restItemsUnitsIdGet) | **GET** /rest/items/units/{id} | Get a unit
[**restItemsUnitsIdNamesGet**](ItemApi.md#restItemsUnitsIdNamesGet) | **GET** /rest/items/units/{id}/names | List unit names
[**restItemsUnitsIdNamesLangDelete**](ItemApi.md#restItemsUnitsIdNamesLangDelete) | **DELETE** /rest/items/units/{id}/names/{lang} | Delete a unit name
[**restItemsUnitsIdNamesLangGet**](ItemApi.md#restItemsUnitsIdNamesLangGet) | **GET** /rest/items/units/{id}/names/{lang} | Get a unit name
[**restItemsUnitsIdNamesLangPut**](ItemApi.md#restItemsUnitsIdNamesLangPut) | **PUT** /rest/items/units/{id}/names/{lang} | Update a unit name
[**restItemsUnitsIdNamesPost**](ItemApi.md#restItemsUnitsIdNamesPost) | **POST** /rest/items/units/{id}/names | Create a unit name
[**restItemsUnitsIdPut**](ItemApi.md#restItemsUnitsIdPut) | **PUT** /rest/items/units/{id} | Update a unit
[**restItemsUnitsPost**](ItemApi.md#restItemsUnitsPost) | **POST** /rest/items/units | Create a unit
[**restItemsVariationsGet**](ItemApi.md#restItemsVariationsGet) | **GET** /rest/items/variations | Search variations
[**restItemsVariationsPut**](ItemApi.md#restItemsVariationsPut) | **PUT** /rest/items/variations | Update up to 50 variations
[**restItemsVariationsVariationCategoriesPost**](ItemApi.md#restItemsVariationsVariationCategoriesPost) | **POST** /rest/items/variations/variation_categories | Bulk create category links
[**restItemsVariationsVariationCategoriesPut**](ItemApi.md#restItemsVariationsVariationCategoriesPut) | **PUT** /rest/items/variations/variation_categories | Bulk update category links
[**restItemsVariationsVariationMarketsGet**](ItemApi.md#restItemsVariationsVariationMarketsGet) | **GET** /rest/items/variations/variation_markets | List all links between variations and markets
[**restItemsVariationsVariationMarketsPost**](ItemApi.md#restItemsVariationsVariationMarketsPost) | **POST** /rest/items/variations/variation_markets | Create up to 50 links between variations and markets
[**restItemsVariationsVariationPropertiesPost**](ItemApi.md#restItemsVariationsVariationPropertiesPost) | **POST** /rest/items/variations/variation_properties | Bulk update properties
[**restItemsVariationsVariationPropertiesPut**](ItemApi.md#restItemsVariationsVariationPropertiesPut) | **PUT** /rest/items/variations/variation_properties | Bulk update properties
[**restItemsVariationsVariationSalesPricesGet**](ItemApi.md#restItemsVariationsVariationSalesPricesGet) | **GET** /rest/items/variations/variation_sales_prices | Get all sales price relations
[**restItemsVariationsVariationSalesPricesPost**](ItemApi.md#restItemsVariationsVariationSalesPricesPost) | **POST** /rest/items/variations/variation_sales_prices | Bulk create prices
[**restItemsVariationsVariationSalesPricesPut**](ItemApi.md#restItemsVariationsVariationSalesPricesPut) | **PUT** /rest/items/variations/variation_sales_prices | Bulk update prices



## restAvailabilitiesGet

> \OpenAPI\Client\Model\Availability[] restAvailabilitiesGet()

List item availabilities

Lists all item availabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAvailabilitiesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restAvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Availability[]**](../Model/Availability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAvailabilitiesIdGet

> \OpenAPI\Client\Model\Availability restAvailabilitiesIdGet($id)

Get an item availability

Gets an item availability. The ID of the availability must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restAvailabilitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restAvailabilitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Availability**](../Model/Availability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restAvailabilitiesIdPut

> \OpenAPI\Client\Model\Availability restAvailabilitiesIdPut($id, $_rest_availabilities_id)

Update an item availability

Updates an item availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_availabilities_id = new \OpenAPI\Client\Model\InlineObject30(); // \OpenAPI\Client\Model\InlineObject30 | 

try {
    $result = $apiInstance->restAvailabilitiesIdPut($id, $_rest_availabilities_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restAvailabilitiesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_availabilities_id** | [**\OpenAPI\Client\Model\InlineObject30**](../Model/InlineObject30.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Availability**](../Model/Availability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsDelete

> \OpenAPI\Client\Model\ItemSet[] restItemSetsDelete()

Delete item sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemSetsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ItemSet[]**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsGet

> \OpenAPI\Client\Model\ItemSet[] restItemSetsGet()

List item sets

Lists all item sets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemSetsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ItemSet[]**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsIdDelete

> object restItemSetsIdDelete($id)

Delete an item set

Deletes an item set. The item ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsIdGet

> \OpenAPI\Client\Model\ItemSet restItemSetsIdGet($id)

Get an item set

Gets the configuration of an item set. The item ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSet**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsIdPut

> \OpenAPI\Client\Model\ItemSet restItemSetsIdPut($id)

Update an item set

Updates an item set. The item ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSet**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsPost

> \OpenAPI\Client\Model\ItemSet restItemSetsPost($params)

Create item sets

Creates item Sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = 56; // int | includes the item sets that have to be created

try {
    $result = $apiInstance->restItemSetsPost($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **params** | **int**| includes the item sets that have to be created | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemSet**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsPut

> \OpenAPI\Client\Model\ItemSet[] restItemSetsPut()

Update item sets

Updates item sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemSetsPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ItemSet[]**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsDelete

> \OpenAPI\Client\Model\ItemSetComponent restItemSetsSetIdComponentsDelete($set_id)

Delete item set components

Deletes item set components. The ID of the set and the component must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsDelete($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsGet

> \OpenAPI\Client\Model\ItemSetComponent[] restItemSetsSetIdComponentsGet($set_id)

List item set components of an item set

Lists the item set components of an item set. The ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsGet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetComponent[]**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsIdDelete

> object restItemSetsSetIdComponentsIdDelete($set_id, $id)

Delete an item set component

Deletes an item set component. The item set component ID of the item set component must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 
$id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsIdDelete($set_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsIdGet

> \OpenAPI\Client\Model\ItemSetComponent restItemSetsSetIdComponentsIdGet($set_id, $id)

Get an item set component

Gets an item set component. The ID of the component and the set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 
$id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsIdGet($set_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsIdPut

> \OpenAPI\Client\Model\ItemSetComponent restItemSetsSetIdComponentsIdPut($set_id, $id)

Update an item set component

Updates an item set component. The ID of the set and the component must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 
$id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsIdPut($set_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsPost

> \OpenAPI\Client\Model\ItemSetComponent restItemSetsSetIdComponentsPost($set_id)

Create item set components

Creates item set components. The id of the set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsPost($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdComponentsPut

> \OpenAPI\Client\Model\ItemSetComponent restItemSetsSetIdComponentsPut($set_id)

Update item set components

Updates item set components. The id of the set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdComponentsPut($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdConfigGet

> \OpenAPI\Client\Model\ItemSetConfig restItemSetsSetIdConfigGet($set_id)

Get the item set configuration of an item set

Gets the item set configuration of an item set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdConfigGet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetConfig**](../Model/ItemSetConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemSetsSetIdConfigPut

> \OpenAPI\Client\Model\ItemSetConfig restItemSetsSetIdConfigPut($set_id)

Update an item set configuration

Updates an item set configuration. The id of the item set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int | 

try {
    $result = $apiInstance->restItemSetsSetIdConfigPut($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemSetConfig**](../Model/ItemSetConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributeValuesValueIdNamesGet

> \OpenAPI\Client\Model\AttributeValueName[] restItemsAttributeValuesValueIdNamesGet($value_id)

Get name and language for an attribute value ID

Gets name and language for an attribute value ID. The attribute value ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesGet($value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeValueName[]**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributeValuesValueIdNamesLangDelete

> object restItemsAttributeValuesValueIdNamesLangDelete($value_id, $lang)

Delete an attribute value name

Deletes an attribute value name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesLangDelete($value_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value_id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributeValuesValueIdNamesLangGet

> \OpenAPI\Client\Model\AttributeValueName restItemsAttributeValuesValueIdNamesLangGet($value_id, $lang)

Get an attribute value name

Gets the attribute value name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesLangGet($value_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeValueName**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributeValuesValueIdNamesLangPut

> \OpenAPI\Client\Model\AttributeValueName restItemsAttributeValuesValueIdNamesLangPut($value_id, $lang, $_rest_items_attribute_values_value_id_names_lang)

Update an attribute value name

Updates an attribute value name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int | 
$lang = 56; // int | 
$_rest_items_attribute_values_value_id_names_lang = new \OpenAPI\Client\Model\InlineObject53(); // \OpenAPI\Client\Model\InlineObject53 | 

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesLangPut($value_id, $lang, $_rest_items_attribute_values_value_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value_id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_attribute_values_value_id_names_lang** | [**\OpenAPI\Client\Model\InlineObject53**](../Model/InlineObject53.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueName**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributeValuesValueIdNamesPost

> \OpenAPI\Client\Model\AttributeValueName restItemsAttributeValuesValueIdNamesPost($value_id, $_rest_items_attribute_values_value_id_names)

Create an attribute value name

Creates an attribute value name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int | 
$_rest_items_attribute_values_value_id_names = new \OpenAPI\Client\Model\InlineObject52(); // \OpenAPI\Client\Model\InlineObject52 | 

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesPost($value_id, $_rest_items_attribute_values_value_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value_id** | **int**|  |
 **_rest_items_attribute_values_value_id_names** | [**\OpenAPI\Client\Model\InlineObject52**](../Model/InlineObject52.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueName**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdMarketsMarketIdMapsDelete

> object restItemsAttributesAttributeIdMarketsMarketIdMapsDelete($attribute_id, $market_id)

Deletes an attribute map.

Deletes an attribute map. The ID of the attribute and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdMarketsMarketIdMapsDelete($attribute_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdMarketsMarketIdMapsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **market_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdMarketsMarketIdMapsGet

> \OpenAPI\Client\Model\AttributeMap restItemsAttributesAttributeIdMarketsMarketIdMapsGet($attribute_id, $market_id)

Gets an attribute map.

Gets an attribute map. The ID of the attribute and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdMarketsMarketIdMapsGet($attribute_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdMarketsMarketIdMapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **market_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeMap**](../Model/AttributeMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdMarketsMarketIdMapsPut

> \OpenAPI\Client\Model\AttributeMap restItemsAttributesAttributeIdMarketsMarketIdMapsPut($attribute_id, $market_id)

Updates an attribute map.

Updates an attribute map. The ID of the attribute and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdMarketsMarketIdMapsPut($attribute_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdMarketsMarketIdMapsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **market_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeMap**](../Model/AttributeMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdNamesGet

> \OpenAPI\Client\Model\AttributeName[] restItemsAttributesAttributeIdNamesGet($attribute_id)

Get an attribute name

Gets the attribute name in the specified language. The language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesGet($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeName[]**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdNamesLangDelete

> object restItemsAttributesAttributeIdNamesLangDelete($attribute_id, $lang)

Delete an attribute name

Deletes the attribute name in the specified language. The language code and attribute name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesLangDelete($attribute_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdNamesLangGet

> \OpenAPI\Client\Model\AttributeName restItemsAttributesAttributeIdNamesLangGet($attribute_id, $lang)

List attribute names

Lists the attribute names of an attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesLangGet($attribute_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeName**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdNamesLangPut

> \OpenAPI\Client\Model\AttributeName restItemsAttributesAttributeIdNamesLangPut($attribute_id, $lang, $_rest_items_attributes_attribute_id_names_lang)

Update an attribute name

Updates the attribute name in the specified language. The language code and attribute name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$lang = 56; // int | 
$_rest_items_attributes_attribute_id_names_lang = new \OpenAPI\Client\Model\InlineObject58(); // \OpenAPI\Client\Model\InlineObject58 | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesLangPut($attribute_id, $lang, $_rest_items_attributes_attribute_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_attributes_attribute_id_names_lang** | [**\OpenAPI\Client\Model\InlineObject58**](../Model/InlineObject58.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeName**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdNamesPost

> \OpenAPI\Client\Model\AttributeName restItemsAttributesAttributeIdNamesPost($attribute_id, $_rest_items_attributes_attribute_id_names)

Create an attribute name

Creates an attribute name in the specified language. The language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$_rest_items_attributes_attribute_id_names = new \OpenAPI\Client\Model\InlineObject57(); // \OpenAPI\Client\Model\InlineObject57 | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesPost($attribute_id, $_rest_items_attributes_attribute_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **_rest_items_attributes_attribute_id_names** | [**\OpenAPI\Client\Model\InlineObject57**](../Model/InlineObject57.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeName**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValueMarketNamesGet

> \OpenAPI\Client\Model\InlineResponse20012 restItemsAttributesAttributeIdValueMarketNamesGet($attribute_id, $reference_type, $lang, $page, $items_per_page)

Search attribute value market names

Searches the delete log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$reference_type = 'reference_type_example'; // string | 
$lang = 'lang_example'; // string | 
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesGet($attribute_id, $reference_type, $lang, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **reference_type** | **string**|  | [optional]
 **lang** | **string**|  | [optional]
 **page** | **int**| The page of results to search for | [optional]
 **items_per_page** | **int**| The number of items to list per page | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValueMarketNamesPost

> \OpenAPI\Client\Model\AttributeValueMarketName restItemsAttributesAttributeIdValueMarketNamesPost($attribute_id, $_rest_items_attributes_attribute_id_value_market_names)

Create an attribute value market name

Creates an attribute value market name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$_rest_items_attributes_attribute_id_value_market_names = new \OpenAPI\Client\Model\InlineObject59(); // \OpenAPI\Client\Model\InlineObject59 | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesPost($attribute_id, $_rest_items_attributes_attribute_id_value_market_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **_rest_items_attributes_attribute_id_value_market_names** | [**\OpenAPI\Client\Model\InlineObject59**](../Model/InlineObject59.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueMarketName**](../Model/AttributeValueMarketName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete

> object restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete($attribute_id, $value_id, $lang, $reference_type)

Delete an attribute value market name

Deletes an attribute value market name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$value_id = 56; // int | 
$lang = 56; // int | 
$reference_type = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete($attribute_id, $value_id, $lang, $reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **value_id** | **int**|  |
 **lang** | **int**|  |
 **reference_type** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut

> \OpenAPI\Client\Model\AttributeValueMarketName restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut($attribute_id, $value_id, $lang, $reference_type, $_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type)

Update an attribute value market name

Updates an attribute value market name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$value_id = 56; // int | 
$lang = 56; // int | 
$reference_type = 56; // int | 
$_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type = new \OpenAPI\Client\Model\InlineObject60(); // \OpenAPI\Client\Model\InlineObject60 | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut($attribute_id, $value_id, $lang, $reference_type, $_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **value_id** | **int**|  |
 **lang** | **int**|  |
 **reference_type** | **int**|  |
 **_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type** | [**\OpenAPI\Client\Model\InlineObject60**](../Model/InlineObject60.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueMarketName**](../Model/AttributeValueMarketName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete

> object restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete($attribute_id, $attribute_value_id, $market_id)

Deletes an attribute value map.

Deletes an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$attribute_value_id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete($attribute_id, $attribute_value_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **attribute_value_id** | **int**|  |
 **market_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet

> \OpenAPI\Client\Model\AttributeValueMap restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet($attribute_id, $attribute_value_id, $market_id)

Gets an attribute value map.

Gets an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$attribute_value_id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet($attribute_id, $attribute_value_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **attribute_value_id** | **int**|  |
 **market_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeValueMap**](../Model/AttributeValueMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut

> \OpenAPI\Client\Model\AttributeValueMap restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut($attribute_id, $attribute_value_id, $market_id)

Updates an attribute value map.

Updates an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$attribute_value_id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut($attribute_id, $attribute_value_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **attribute_value_id** | **int**|  |
 **market_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeValueMap**](../Model/AttributeValueMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesGet

> \OpenAPI\Client\Model\InlineResponse20013 restItemsAttributesAttributeIdValuesGet($attribute_id, $with, $updated_at)

List attribute values

Lists the attribute values for an attribute. The attribute ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$with = 'with_example'; // string | Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute value links (amazon excluded)</li></ul>
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesGet($attribute_id, $with, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **with** | **string**| Includes the specified attribute value information in the results. The following parameters are available:&lt;ul&gt;&lt;li&gt;attribute &#x3D; The attribute of the value&lt;/li&gt;&lt;li&gt;names &#x3D; The attribute value names in all languages&lt;/li&gt;&lt;li&gt;marketNames &#x3D; The market attribute value links (amazon only)&lt;/li&gt;&lt;li&gt;valueMaps &#x3D; The market attribute value links (amazon excluded)&lt;/li&gt;&lt;/ul&gt; | [optional]
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesIdDelete

> object restItemsAttributesAttributeIdValuesIdDelete($attribute_id, $id)

Delete an attribute value

Deletes an attribute value. The attribute ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesIdDelete($attribute_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesIdGet

> \OpenAPI\Client\Model\AttributeValue restItemsAttributesAttributeIdValuesIdGet($attribute_id, $id, $with)

Get an attribute value

Get an attribute value. The ID of the attribute value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$id = 56; // int | 
$with = 'with_example'; // string | Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute links (amazon excluded)</li></ul>

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesIdGet($attribute_id, $id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **id** | **int**|  |
 **with** | **string**| Includes the specified attribute value information in the results. The following parameters are available:&lt;ul&gt;&lt;li&gt;attribute &#x3D; The attribute of the value&lt;/li&gt;&lt;li&gt;names &#x3D; The attribute value names in all languages&lt;/li&gt;&lt;li&gt;marketNames &#x3D; The market attribute value links (amazon only)&lt;/li&gt;&lt;li&gt;valueMaps &#x3D; The market attribute links (amazon excluded)&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesIdPut

> \OpenAPI\Client\Model\AttributeValue restItemsAttributesAttributeIdValuesIdPut($attribute_id, $id, $_rest_items_attributes_attribute_id_values_id)

Update an attribute value

Updates an attribute value. The attribute value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$id = 56; // int | 
$_rest_items_attributes_attribute_id_values_id = new \OpenAPI\Client\Model\InlineObject62(); // \OpenAPI\Client\Model\InlineObject62 | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesIdPut($attribute_id, $id, $_rest_items_attributes_attribute_id_values_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **id** | **int**|  |
 **_rest_items_attributes_attribute_id_values_id** | [**\OpenAPI\Client\Model\InlineObject62**](../Model/InlineObject62.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesAttributeIdValuesPost

> \OpenAPI\Client\Model\AttributeValue restItemsAttributesAttributeIdValuesPost($attribute_id, $_rest_items_attributes_attribute_id_values)

Create an attribute value

Creates an attribute value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$_rest_items_attributes_attribute_id_values = new \OpenAPI\Client\Model\InlineObject61(); // \OpenAPI\Client\Model\InlineObject61 | 

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesPost($attribute_id, $_rest_items_attributes_attribute_id_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **_rest_items_attributes_attribute_id_values** | [**\OpenAPI\Client\Model\InlineObject61**](../Model/InlineObject61.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesGet

> \OpenAPI\Client\Model\InlineResponse20011 restItemsAttributesGet($with, $updated_at)

List attributes

Lists all attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsAttributesGet($with, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| Includes the specified attribute information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the attribute&lt;/li&gt;&lt;li&gt;values&lt;/b&gt; &#x3D; The values of the attribute&lt;/li&gt;&lt;li&gt;maps&lt;/b&gt; &#x3D; The market maps of the attribute&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional]
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesIdDelete

> object restItemsAttributesIdDelete($id)

Delete an attribute

Deletes an attribute. The ID of the attribute must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsAttributesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesIdGet

> \OpenAPI\Client\Model\Attribute restItemsAttributesIdGet($id, $with)

Get an attribute

Gets an attribute. The ID of the attribute must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$with = 'with_example'; // string | Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restItemsAttributesIdGet($id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **with** | **string**| Includes the specified attribute information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the attribute&lt;/li&gt;&lt;li&gt;values&lt;/b&gt; &#x3D; The values of the attribute&lt;/li&gt;&lt;li&gt;maps&lt;/b&gt; &#x3D; The market maps of the attribute&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional]

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesIdPut

> \OpenAPI\Client\Model\Attribute restItemsAttributesIdPut($id, $_rest_items_attributes_id)

Update an attribute

Updates an attribute. The ID of the attribute must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_attributes_id = new \OpenAPI\Client\Model\InlineObject63(); // \OpenAPI\Client\Model\InlineObject63 | 

try {
    $result = $apiInstance->restItemsAttributesIdPut($id, $_rest_items_attributes_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_attributes_id** | [**\OpenAPI\Client\Model\InlineObject63**](../Model/InlineObject63.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesMapsGet

> \OpenAPI\Client\Model\InlineResponse2005 restItemsAttributesMapsGet()

Lists all attribute maps.

Lists all attribute maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsAttributesMapsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesMapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesMarketsMapsPost

> \OpenAPI\Client\Model\AttributeMap restItemsAttributesMarketsMapsPost($_rest_items_attributes_markets_maps)

Creates a new attribute map.

Creates a new attribute map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_attributes_markets_maps = new \OpenAPI\Client\Model\InlineObject55(); // \OpenAPI\Client\Model\InlineObject55 | 

try {
    $result = $apiInstance->restItemsAttributesMarketsMapsPost($_rest_items_attributes_markets_maps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesMarketsMapsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_attributes_markets_maps** | [**\OpenAPI\Client\Model\InlineObject55**](../Model/InlineObject55.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeMap**](../Model/AttributeMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesPost

> \OpenAPI\Client\Model\Attribute restItemsAttributesPost($_rest_items_attributes)

Create an attribute

Creates an attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_attributes = new \OpenAPI\Client\Model\InlineObject54(); // \OpenAPI\Client\Model\InlineObject54 | 

try {
    $result = $apiInstance->restItemsAttributesPost($_rest_items_attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_attributes** | [**\OpenAPI\Client\Model\InlineObject54**](../Model/InlineObject54.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesValuesMapsGet

> \OpenAPI\Client\Model\InlineResponse2005 restItemsAttributesValuesMapsGet()

Lists all attribute value maps.

Lists all attribute value maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsAttributesValuesMapsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesValuesMapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsAttributesValuesMarketsMapsPost

> \OpenAPI\Client\Model\AttributeValueMap restItemsAttributesValuesMarketsMapsPost($_rest_items_attributes_values_markets_maps)

Creates a new attribute value map.

Creates a new attribute value map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_attributes_values_markets_maps = new \OpenAPI\Client\Model\InlineObject56(); // \OpenAPI\Client\Model\InlineObject56 | 

try {
    $result = $apiInstance->restItemsAttributesValuesMarketsMapsPost($_rest_items_attributes_values_markets_maps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesValuesMarketsMapsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_attributes_values_markets_maps** | [**\OpenAPI\Client\Model\InlineObject56**](../Model/InlineObject56.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueMap**](../Model/AttributeValueMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesBarcodeIdDelete

> object restItemsBarcodesBarcodeIdDelete($barcode_id)

Delete a barcode

Deletes a barcode. The ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int | 

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdDelete($barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesBarcodeIdGet

> \OpenAPI\Client\Model\Barcode restItemsBarcodesBarcodeIdGet($barcode_id)

Get a barcode

Gets a barcode. The ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int | 

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdGet($barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Barcode**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesBarcodeIdPut

> \OpenAPI\Client\Model\Barcode restItemsBarcodesBarcodeIdPut($barcode_id, $_rest_items_barcodes_barcode_id)

Update a barcode

Updates a barcode. The ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int | 
$_rest_items_barcodes_barcode_id = new \OpenAPI\Client\Model\InlineObject65(); // \OpenAPI\Client\Model\InlineObject65 | 

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdPut($barcode_id, $_rest_items_barcodes_barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode_id** | **int**|  |
 **_rest_items_barcodes_barcode_id** | [**\OpenAPI\Client\Model\InlineObject65**](../Model/InlineObject65.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Barcode**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesBarcodeIdReferrerPost

> \OpenAPI\Client\Model\BarcodeLinkReferrer restItemsBarcodesBarcodeIdReferrerPost($barcode_id)

Activate a referrer

Activate a referrer for a barcode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int | 

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdReferrerPost($barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdReferrerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\BarcodeLinkReferrer**](../Model/BarcodeLinkReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesBarcodeIdReferrerReferrerIdDelete

> object restItemsBarcodesBarcodeIdReferrerReferrerIdDelete($barcode_id, $referrer_id)

Deactivate a referrer

Deactivate a referrer for a barcode. The ID of the barcode and the ID of the referrer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int | 
$referrer_id = 56; // int | 

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdReferrerReferrerIdDelete($barcode_id, $referrer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdReferrerReferrerIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode_id** | **int**|  |
 **referrer_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesGet

> \OpenAPI\Client\Model\InlineResponse20014 restItemsBarcodesGet($updated_at)

List barcodes

Lists all barcodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsBarcodesGet($updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesPost

> \OpenAPI\Client\Model\Barcode restItemsBarcodesPost($_rest_items_barcodes)

Create a barcode

Creates a barcode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_barcodes = new \OpenAPI\Client\Model\InlineObject64(); // \OpenAPI\Client\Model\InlineObject64 | 

try {
    $result = $apiInstance->restItemsBarcodesPost($_rest_items_barcodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_barcodes** | [**\OpenAPI\Client\Model\InlineObject64**](../Model/InlineObject64.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Barcode**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesReferrerReferrerIdGet

> \OpenAPI\Client\Model\Barcode[] restItemsBarcodesReferrerReferrerIdGet($referrer_id)

List barcodes by referrer

Lists barcodes linked to the specified referrer. The ID of the referrer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$referrer_id = 56; // int | 

try {
    $result = $apiInstance->restItemsBarcodesReferrerReferrerIdGet($referrer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesReferrerReferrerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referrer_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Barcode[]**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsBarcodesTypeTypeGet

> \OpenAPI\Client\Model\Barcode[] restItemsBarcodesTypeTypeGet($type)

List barcodes by type

Lists all barcodes of a specific type. The type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | 

try {
    $result = $apiInstance->restItemsBarcodesTypeTypeGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Barcode[]**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsGet

> \OpenAPI\Client\Model\InlineResponse20010 restItemsGet($with, $lang, $page, $items_per_page, $name, $manufacturer_id, $id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between, $or)

Search item

Search item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
$name = 'name_example'; // string | Filter restricts the list of results to items with the specified item name. An item name must be specified.
$manufacturer_id = 'manufacturer_id_example'; // string | Filter restricts the list of results to items with the specified manufacturerId.
$id = 56; // int | Filter restricts the list of results to items with the specified ID. More than one ID should be separated by commas.
$flag_one = 56; // int | Filter restricts the list of results to items with the specified flagOne.
$flag_two = 56; // int | Filter restricts the list of results to items with the specified flagTwo.
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported.
$variation_updated_between = 'variation_updated_between_example'; // string | Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported.
$variation_related_updated_between = 'variation_related_updated_between_example'; // string | Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
$or = 'or_example'; // string | Filters can be defined in this param to link them via OR instead of AND. The syntax looks like the following: or=(updatedBetween=1573050718&varitionUpdatedBetween=1573050718). Everything in the brackets is written in the normal URL-Syntax. The or-param can be used multiple times if it is used like this: or[]=(...)&or[]=(...)

try {
    $result = $apiInstance->restItemsGet($with, $lang, $page, $items_per_page, $name, $manufacturer_id, $id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between, $or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles | [optional]
 **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional]
 **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional]
 **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. | [optional]
 **name** | **string**| Filter restricts the list of results to items with the specified item name. An item name must be specified. | [optional]
 **manufacturer_id** | **string**| Filter restricts the list of results to items with the specified manufacturerId. | [optional]
 **id** | **int**| Filter restricts the list of results to items with the specified ID. More than one ID should be separated by commas. | [optional]
 **flag_one** | **int**| Filter restricts the list of results to items with the specified flagOne. | [optional]
 **flag_two** | **int**| Filter restricts the list of results to items with the specified flagTwo. | [optional]
 **updated_between** | **string**| Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween&#x3D;1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween&#x3D;1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported. | [optional]
 **variation_updated_between** | **string**| Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween&#x3D;1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween&#x3D;1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported. | [optional]
 **variation_related_updated_between** | **string**| Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats. | [optional]
 **or** | **string**| Filters can be defined in this param to link them via OR instead of AND. The syntax looks like the following: or&#x3D;(updatedBetween&#x3D;1573050718&amp;varitionUpdatedBetween&#x3D;1573050718). Everything in the brackets is written in the normal URL-Syntax. The or-param can be used multiple times if it is used like this: or[]&#x3D;(...)&amp;or[]&#x3D;(...) | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesAttributeValueMarketsGet

> object restItemsIdImagesAttributeValueMarketsGet($id, $image_id, $item_id, $value_id, $attribute_id)

List attribute value image link

Lists the images linked to an attribute value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the attribute value
$attribute_id = 56; // int | The unique ID of the attribute

try {
    $result = $apiInstance->restItemsIdImagesAttributeValueMarketsGet($id, $image_id, $item_id, $value_id, $attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesAttributeValueMarketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**| The unique ID of the image | [optional]
 **item_id** | **int**| The unique ID of the item | [optional]
 **value_id** | **int**| The unique ID of the attribute value | [optional]
 **attribute_id** | **int**| The unique ID of the attribute | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesGet

> \OpenAPI\Client\Model\ItemImage[] restItemsIdImagesGet($id, $updated_at)

List images of an item

Lists all images of an item. The item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsIdImagesGet($id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemImage[]**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAttributeValueMarketsPost

> \OpenAPI\Client\Model\AttributeValueImage restItemsIdImagesImageIdAttributeValueMarketsPost($id, $image_id, $_rest_items_id_images_image_id_attribute_value_markets)

Create an attribute value image link

Creates a link between an image and an attribute value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$_rest_items_id_images_image_id_attribute_value_markets = new \OpenAPI\Client\Model\InlineObject101(); // \OpenAPI\Client\Model\InlineObject101 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsPost($id, $image_id, $_rest_items_id_images_image_id_attribute_value_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **_rest_items_id_images_image_id_attribute_value_markets** | [**\OpenAPI\Client\Model\InlineObject101**](../Model/InlineObject101.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueImage**](../Model/AttributeValueImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete

> restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete($image_id, $item_id, $value_id, $id)

Delete an attribute value image link

Deletes the link between an image and an attribute value. The attribute ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the attribute value
$id = 56; // int | 

try {
    $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete($image_id, $item_id, $value_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **int**| The unique ID of the image |
 **item_id** | **int**| The unique ID of the item |
 **value_id** | **int**| The unique ID of the attribute value |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAttributeValueMarketsValueIdGet

> \OpenAPI\Client\Model\AttributeValueImage restItemsIdImagesImageIdAttributeValueMarketsValueIdGet($image_id, $item_id, $value_id, $id)

Get an attribute value image link

Gets an attribute value image link. The following IDs must be specified: image ID, item ID and value ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the value
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsValueIdGet($image_id, $item_id, $value_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsValueIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **int**| The unique ID of the image |
 **item_id** | **int**| The unique ID of the item |
 **value_id** | **int**| The unique ID of the value |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AttributeValueImage**](../Model/AttributeValueImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAttributeValueMarketsValueIdPut

> \OpenAPI\Client\Model\AttributeValueImage restItemsIdImagesImageIdAttributeValueMarketsValueIdPut($image_id, $item_id, $value_id, $attribute_id, $id, $_rest_items_id_images_image_id_attribute_value_markets_value_id)

Update an attribute value image link

Updates the link between an image and an attribute value. The following IDs must be specified: image ID, item ID and value ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the attribute value
$attribute_id = 56; // int | The unique ID of the attribute
$id = 56; // int | 
$_rest_items_id_images_image_id_attribute_value_markets_value_id = new \OpenAPI\Client\Model\InlineObject102(); // \OpenAPI\Client\Model\InlineObject102 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsValueIdPut($image_id, $item_id, $value_id, $attribute_id, $id, $_rest_items_id_images_image_id_attribute_value_markets_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsValueIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **int**| The unique ID of the image |
 **item_id** | **int**| The unique ID of the item |
 **value_id** | **int**| The unique ID of the attribute value |
 **attribute_id** | **int**| The unique ID of the attribute |
 **id** | **int**|  |
 **_rest_items_id_images_image_id_attribute_value_markets_value_id** | [**\OpenAPI\Client\Model\InlineObject102**](../Model/InlineObject102.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AttributeValueImage**](../Model/AttributeValueImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAvailabilitiesDelete

> object restItemsIdImagesImageIdAvailabilitiesDelete($id, $image_id, $_rest_items_id_images_image_id_availabilities)

Delete an availability

Delete an availability for a specified value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$_rest_items_id_images_image_id_availabilities = new \OpenAPI\Client\Model\InlineObject104(); // \OpenAPI\Client\Model\InlineObject104 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdAvailabilitiesDelete($id, $image_id, $_rest_items_id_images_image_id_availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAvailabilitiesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **_rest_items_id_images_image_id_availabilities** | [**\OpenAPI\Client\Model\InlineObject104**](../Model/InlineObject104.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAvailabilitiesGet

> \OpenAPI\Client\Model\ItemImageAvailability restItemsIdImagesImageIdAvailabilitiesGet($id, $image_id)

List availabilities

List all availabilities of an image. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdAvailabilitiesGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemImageAvailability**](../Model/ItemImageAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdAvailabilitiesPost

> \OpenAPI\Client\Model\ItemImageAvailability restItemsIdImagesImageIdAvailabilitiesPost($id, $image_id, $_rest_items_id_images_image_id_availabilities)

Create an availability

Create an availability. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$_rest_items_id_images_image_id_availabilities = new \OpenAPI\Client\Model\InlineObject103(); // \OpenAPI\Client\Model\InlineObject103 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdAvailabilitiesPost($id, $image_id, $_rest_items_id_images_image_id_availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAvailabilitiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **_rest_items_id_images_image_id_availabilities** | [**\OpenAPI\Client\Model\InlineObject103**](../Model/InlineObject103.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemImageAvailability**](../Model/ItemImageAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdDelete

> object restItemsIdImagesImageIdDelete($id, $image_id)

Delete an image

Delete an image. The ID of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdDelete($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdGet

> \OpenAPI\Client\Model\ItemImage restItemsIdImagesImageIdGet($id, $image_id)

Get an image

Gets an image. The ID of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemImage**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdNamesGet

> \OpenAPI\Client\Model\ItemImageName[] restItemsIdImagesImageIdNamesGet($id, $image_id)

List names of an image

Lists all names of an image. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemImageName[]**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdNamesLangDelete

> object restItemsIdImagesImageIdNamesLangDelete($id, $image_id, $lang)

Delete an image name

Delete an image name. The ID and language of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesLangDelete($id, $image_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdNamesLangGet

> \OpenAPI\Client\Model\ItemImageName restItemsIdImagesImageIdNamesLangGet($id, $image_id, $lang)

Get an image name

Gets an image name. The image ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesLangGet($id, $image_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemImageName**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdNamesLangPut

> \OpenAPI\Client\Model\ItemImageName restItemsIdImagesImageIdNamesLangPut($id, $image_id, $lang, $_rest_items_id_images_image_id_names_lang)

Update an image name

Update an image name. The ID, language and name of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$lang = 56; // int | 
$_rest_items_id_images_image_id_names_lang = new \OpenAPI\Client\Model\InlineObject106(); // \OpenAPI\Client\Model\InlineObject106 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesLangPut($id, $image_id, $lang, $_rest_items_id_images_image_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_id_images_image_id_names_lang** | [**\OpenAPI\Client\Model\InlineObject106**](../Model/InlineObject106.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemImageName**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdNamesPost

> \OpenAPI\Client\Model\ItemImageName restItemsIdImagesImageIdNamesPost($id, $image_id, $_rest_items_id_images_image_id_names)

Create an image name

Create an image name. The ID, language and name of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$_rest_items_id_images_image_id_names = new \OpenAPI\Client\Model\InlineObject105(); // \OpenAPI\Client\Model\InlineObject105 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesPost($id, $image_id, $_rest_items_id_images_image_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **_rest_items_id_images_image_id_names** | [**\OpenAPI\Client\Model\InlineObject105**](../Model/InlineObject105.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemImageName**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdPut

> \OpenAPI\Client\Model\ItemImage restItemsIdImagesImageIdPut($id, $image_id, $_rest_items_id_images_image_id)

Update an image

Updates an image. The ID of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 
$_rest_items_id_images_image_id = new \OpenAPI\Client\Model\InlineObject100(); // \OpenAPI\Client\Model\InlineObject100 | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdPut($id, $image_id, $_rest_items_id_images_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |
 **_rest_items_id_images_image_id** | [**\OpenAPI\Client\Model\InlineObject100**](../Model/InlineObject100.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemImage**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesImageIdVariationImagesGet

> \OpenAPI\Client\Model\VariationImage restItemsIdImagesImageIdVariationImagesGet($id, $image_id)

List image links of an image

Lists all variations linked to an image. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdImagesImageIdVariationImagesGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdVariationImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **image_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdImagesUploadPost

> \OpenAPI\Client\Model\ItemImage restItemsIdImagesUploadPost($id, $_rest_items_id_images_upload)

Upload a new image

Uploads an image. The item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_id_images_upload = new \OpenAPI\Client\Model\InlineObject99(); // \OpenAPI\Client\Model\InlineObject99 | 

try {
    $result = $apiInstance->restItemsIdImagesUploadPost($id, $_rest_items_id_images_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_id_images_upload** | [**\OpenAPI\Client\Model\InlineObject99**](../Model/InlineObject99.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemImage**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdItemCrossSellingCrossItemIdDelete

> object restItemsIdItemCrossSellingCrossItemIdDelete($id, $cross_item_id)

Delete a cross-selling link

Deletes a cross-selling link. The ID of the item and the ID of the cross-selling item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$cross_item_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdItemCrossSellingCrossItemIdDelete($id, $cross_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdItemCrossSellingCrossItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **cross_item_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdItemCrossSellingGet

> \OpenAPI\Client\Model\ItemCrossSelling restItemsIdItemCrossSellingGet($id)

List cross-selling links

Lists all cross-selling items linked to an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdItemCrossSellingGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdItemCrossSellingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemCrossSelling**](../Model/ItemCrossSelling.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdItemCrossSellingPost

> \OpenAPI\Client\Model\ItemCrossSelling restItemsIdItemCrossSellingPost($id, $_rest_items_id_item_cross_selling)

Create a cross-selling link

Creates a cross-selling link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_id_item_cross_selling = new \OpenAPI\Client\Model\InlineObject107(); // \OpenAPI\Client\Model\InlineObject107 | 

try {
    $result = $apiInstance->restItemsIdItemCrossSellingPost($id, $_rest_items_id_item_cross_selling);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdItemCrossSellingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_id_item_cross_selling** | [**\OpenAPI\Client\Model\InlineObject107**](../Model/InlineObject107.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ItemCrossSelling**](../Model/ItemCrossSelling.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationImagesGet

> \OpenAPI\Client\Model\VariationImage restItemsIdVariationImagesGet($id)

List image links of an item

Lists all images linked to an item. The item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationImagesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdDescriptionsGet

> \OpenAPI\Client\Model\VariationDescription[] restItemsIdVariationsVariationIdDescriptionsGet($id, $variation_id)

List texts

Lists the texts for an item in all available languages. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationDescription[]**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdDescriptionsLangDelete

> object restItemsIdVariationsVariationIdDescriptionsLangDelete($id, $variation_id, $lang)

Delete texts

Deletes texts for an item in the specified language. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsLangDelete($id, $variation_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdDescriptionsLangGet

> \OpenAPI\Client\Model\VariationDescription restItemsIdVariationsVariationIdDescriptionsLangGet($id, $variation_id, $lang)

Get texts

Gets the texts for an item in the specified language. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsLangGet($id, $variation_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationDescription**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdDescriptionsLangPut

> \OpenAPI\Client\Model\VariationDescription restItemsIdVariationsVariationIdDescriptionsLangPut($id, $variation_id, $lang, $_rest_items_id_variations_variation_id_descriptions_lang)

Update texts

Updates texts for an item in the specified language. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$lang = 56; // int | 
$_rest_items_id_variations_variation_id_descriptions_lang = new \OpenAPI\Client\Model\InlineObject109(); // \OpenAPI\Client\Model\InlineObject109 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsLangPut($id, $variation_id, $lang, $_rest_items_id_variations_variation_id_descriptions_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_id_variations_variation_id_descriptions_lang** | [**\OpenAPI\Client\Model\InlineObject109**](../Model/InlineObject109.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationDescription**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdDescriptionsPost

> \OpenAPI\Client\Model\VariationDescription restItemsIdVariationsVariationIdDescriptionsPost($id, $variation_id, $_rest_items_id_variations_variation_id_descriptions)

Create texts

Creates texts for an item. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_descriptions = new \OpenAPI\Client\Model\InlineObject108(); // \OpenAPI\Client\Model\InlineObject108 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsPost($id, $variation_id, $_rest_items_id_variations_variation_id_descriptions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_descriptions** | [**\OpenAPI\Client\Model\InlineObject108**](../Model/InlineObject108.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationDescription**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdImagesGet

> \OpenAPI\Client\Model\ItemImage[] restItemsIdVariationsVariationIdImagesGet($id, $variation_id)

List images of a variation

Lists all images of a variation. The variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdImagesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemImage[]**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdLabelsPost

> object[] restItemsIdVariationsVariationIdLabelsPost($id, $variation_id)

Get a variation label

Gets a base64 encoded label for the specified variation ID. The labelId of the label template must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdLabelsPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdLabelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdMarketIdentNumbersGet

> \OpenAPI\Client\Model\VariationMarketIdentNumber[] restItemsIdVariationsVariationIdMarketIdentNumbersGet($id, $variation_id)

List ident number of a variation

Lists the ident number (ASIN/ePID) of a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationMarketIdentNumber[]**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete

> object restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete($id, $variation_id, $market_ident_number_id)

Deletes a market ident number

Deletes a market ident number (ASIN/ePID) of a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$market_ident_number_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete($id, $variation_id, $market_ident_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **market_ident_number_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet

> \OpenAPI\Client\Model\VariationMarketIdentNumber restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet($id, $variation_id, $market_ident_number_id)

Get a market ident number

Gets a market ident number (ASIN/ePID) of a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$market_ident_number_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet($id, $variation_id, $market_ident_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **market_ident_number_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationMarketIdentNumber**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut

> \OpenAPI\Client\Model\VariationMarketIdentNumber restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut($id, $variation_id, $market_ident_number_id, $_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id)

Updates a market ident number

Updates a market ident number (ASIN/ePID) of a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$market_ident_number_id = 56; // int | 
$_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id = new \OpenAPI\Client\Model\InlineObject111(); // \OpenAPI\Client\Model\InlineObject111 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut($id, $variation_id, $market_ident_number_id, $_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **market_ident_number_id** | **int**|  |
 **_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id** | [**\OpenAPI\Client\Model\InlineObject111**](../Model/InlineObject111.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationMarketIdentNumber**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdMarketIdentNumbersPost

> \OpenAPI\Client\Model\VariationMarketIdentNumber restItemsIdVariationsVariationIdMarketIdentNumbersPost($id, $variation_id, $_rest_items_id_variations_variation_id_market_ident_numbers)

Create a market ident number

Creates a market ident number (ASIN/ePID) for a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_market_ident_numbers = new \OpenAPI\Client\Model\InlineObject110(); // \OpenAPI\Client\Model\InlineObject110 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersPost($id, $variation_id, $_rest_items_id_variations_variation_id_market_ident_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_market_ident_numbers** | [**\OpenAPI\Client\Model\InlineObject110**](../Model/InlineObject110.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationMarketIdentNumber**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockBookIncomingItemsPut

> \OpenAPI\Client\Model\VariationStock[] restItemsIdVariationsVariationIdStockBookIncomingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_incoming_items)

Book incoming stock

Books incoming stock for a variation. The incoming stock will be added to the existing stock. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int | 
$_rest_items_id_variations_variation_id_stock_book_incoming_items = new \OpenAPI\Client\Model\InlineObject112(); // \OpenAPI\Client\Model\InlineObject112 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockBookIncomingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_incoming_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockBookIncomingItemsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **id** | **int**|  |
 **_rest_items_id_variations_variation_id_stock_book_incoming_items** | [**\OpenAPI\Client\Model\InlineObject112**](../Model/InlineObject112.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockBookOutgoingItemsPut

> \OpenAPI\Client\Model\VariationStock[] restItemsIdVariationsVariationIdStockBookOutgoingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_outgoing_items)

Book outgoing stock

Books outgoing stock for a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int | 
$_rest_items_id_variations_variation_id_stock_book_outgoing_items = new \OpenAPI\Client\Model\InlineObject113(); // \OpenAPI\Client\Model\InlineObject113 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockBookOutgoingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_outgoing_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockBookOutgoingItemsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **id** | **int**|  |
 **_rest_items_id_variations_variation_id_stock_book_outgoing_items** | [**\OpenAPI\Client\Model\InlineObject113**](../Model/InlineObject113.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockCorrectionPut

> \OpenAPI\Client\Model\VariationStock[] restItemsIdVariationsVariationIdStockCorrectionPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_correction)

Correct stock

Corrects stock. The item ID and the variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int | 
$_rest_items_id_variations_variation_id_stock_correction = new \OpenAPI\Client\Model\InlineObject114(); // \OpenAPI\Client\Model\InlineObject114 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockCorrectionPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_correction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockCorrectionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **id** | **int**|  |
 **_rest_items_id_variations_variation_id_stock_correction** | [**\OpenAPI\Client\Model\InlineObject114**](../Model/InlineObject114.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockGet

> \OpenAPI\Client\Model\VariationStock[] restItemsIdVariationsVariationIdStockGet($item_id, $variation_id, $id, $columns)

List stock of a variation per warehouse

Lists stock of a variation per warehouse. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int | 
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockGet($item_id, $variation_id, $id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **id** | **int**|  |
 **columns** | **int**| The properties to be loaded | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockMovementsGet

> \OpenAPI\Client\Model\InlineResponse20022 restItemsIdVariationsVariationIdStockMovementsGet($item_id, $variation_id, $page, $items_per_page, $id, $warehouse_id, $created_at_from, $created_at_to, $year, $columns)

List stock movements

Lists stock movements for a variation. The ID of the item and the ID of the variation must be specified. To get movements older than 3 months, set the 'year' parameter. NOTE: You can either get archive entries or non-archive entries. You can not get entries for the current year that are younger and older than 3 months with one request. You need separate requests to get entries older and younger than 3 months. To get all entries younger than 3 month you do not need to specify a year or any createdAt parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$page = 56; // int | The requested page. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of items per page. The default number per page is 50.
$id = 56; // int | 
$warehouse_id = 56; // int | The ID of the warehouse
$created_at_from = 'created_at_from_example'; // string | Get entries with createdAt date after this date
$created_at_to = 'created_at_to_example'; // string | Get entries with createdAt date before this date
$year = 56; // int | Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockMovementsGet($item_id, $variation_id, $page, $items_per_page, $id, $warehouse_id, $created_at_from, $created_at_to, $year, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockMovementsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **page** | **int**| The requested page. The default page that will be returned is page 1. |
 **items_per_page** | **int**| The number of items per page. The default number per page is 50. |
 **id** | **int**|  |
 **warehouse_id** | **int**| The ID of the warehouse | [optional]
 **created_at_from** | **string**| Get entries with createdAt date after this date | [optional]
 **created_at_to** | **string**| Get entries with createdAt date before this date | [optional]
 **year** | **int**| Get entries from the archive for the given year. All movements older than 3 months are stored in the archive. | [optional]
 **columns** | **int**| The properties to be loaded | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockRedistributePut

> \OpenAPI\Client\Model\InlineResponse20023 restItemsIdVariationsVariationIdStockRedistributePut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_redistribute)

Redistribute stock

Redistributes the stock of one storage location among one or more storage locations. The item ID and the variation ID need to be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int | 
$_rest_items_id_variations_variation_id_stock_redistribute = new \OpenAPI\Client\Model\InlineObject115(); // \OpenAPI\Client\Model\InlineObject115 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockRedistributePut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_redistribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockRedistributePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **id** | **int**|  |
 **_rest_items_id_variations_variation_id_stock_redistribute** | [**\OpenAPI\Client\Model\InlineObject115**](../Model/InlineObject115.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdStockStorageLocationsGet

> \OpenAPI\Client\Model\InlineResponse20023 restItemsIdVariationsVariationIdStockStorageLocationsGet($item_id, $variation_id, $page, $items_per_page, $id, $columns)

List stock of a variation per storage locations

Lists stock of a variation per storage location. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$page = 56; // int | The requested page
$items_per_page = 56; // int | The number of items per page
$id = 56; // int | 
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockStorageLocationsGet($item_id, $variation_id, $page, $items_per_page, $id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockStorageLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The ID of the item |
 **variation_id** | **int**| The ID of the variation |
 **page** | **int**| The requested page |
 **items_per_page** | **int**| The number of items per page |
 **id** | **int**|  |
 **columns** | **int**| The properties to be loaded | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete

> object restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete($id, $variation_id, $additional_sku_id)

Delete an additional SKU

Deletes an additional SKU. The ID of the additional SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$additional_sku_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete($id, $variation_id, $additional_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **additional_sku_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet

> \OpenAPI\Client\Model\VariationAdditionalSku restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet($id, $variation_id, $additional_sku_id)

Gets an additional SKU

Gets an additional SKU. The ID of the additional SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$additional_sku_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet($id, $variation_id, $additional_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **additional_sku_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationAdditionalSku**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut

> \OpenAPI\Client\Model\VariationAdditionalSku restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut($id, $variation_id, $additional_sku_id, $_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id)

Update an additional SKU

Updates an additional SKU. The ID of the additional SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$additional_sku_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id = new \OpenAPI\Client\Model\InlineObject118(); // \OpenAPI\Client\Model\InlineObject118 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut($id, $variation_id, $additional_sku_id, $_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **additional_sku_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id** | [**\OpenAPI\Client\Model\InlineObject118**](../Model/InlineObject118.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationAdditionalSku**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationAdditionalSkusGet

> \OpenAPI\Client\Model\VariationAdditionalSku[] restItemsIdVariationsVariationIdVariationAdditionalSkusGet($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus)

List additional SKUs

Lists the additional SKUs of a variation. Filters must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_additional_skus = new \OpenAPI\Client\Model\InlineObject116(); // \OpenAPI\Client\Model\InlineObject116 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusGet($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_additional_skus** | [**\OpenAPI\Client\Model\InlineObject116**](../Model/InlineObject116.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationAdditionalSku[]**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationAdditionalSkusPost

> \OpenAPI\Client\Model\VariationAdditionalSku restItemsIdVariationsVariationIdVariationAdditionalSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus)

Create an additional SKU

Creates an additional SKU. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_additional_skus = new \OpenAPI\Client\Model\InlineObject117(); // \OpenAPI\Client\Model\InlineObject117 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_additional_skus** | [**\OpenAPI\Client\Model\InlineObject117**](../Model/InlineObject117.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationAdditionalSku**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete

> object restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete($id, $variation_id, $barcode_id)

Delete a variation barcode

Deletes a variation barcode. Unlinks the barcode from the variation and deletes the code saved for the variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$barcode_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete($id, $variation_id, $barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **barcode_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet

> \OpenAPI\Client\Model\VariationBarcode restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet($id, $variation_id, $barcode_id)

Get a variation barcode

Get a specific variation barcode. The ID of the item, the ID of the variation and the ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$barcode_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet($id, $variation_id, $barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **barcode_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationBarcode**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut

> \OpenAPI\Client\Model\VariationBarcode restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut($id, $variation_id, $barcode_id, $_rest_items_id_variations_variation_id_variation_barcodes_barcode_id)

Update a variation barcode

Updates a variation barcode. The ID of the item, the ID of the variation, the ID of the barcode and the code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$barcode_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_barcodes_barcode_id = new \OpenAPI\Client\Model\InlineObject120(); // \OpenAPI\Client\Model\InlineObject120 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut($id, $variation_id, $barcode_id, $_rest_items_id_variations_variation_id_variation_barcodes_barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **barcode_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_barcodes_barcode_id** | [**\OpenAPI\Client\Model\InlineObject120**](../Model/InlineObject120.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationBarcode**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBarcodesGet

> \OpenAPI\Client\Model\VariationBarcode[] restItemsIdVariationsVariationIdVariationBarcodesGet($id, $variation_id, $with)

List variation barcodes

Lists all barcodes of a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$with = 'with_example'; // string | Includes the specified variation barcode information in the results. The following parameter is available: <ul><li>barcode</li></ul>

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesGet($id, $variation_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **with** | **string**| Includes the specified variation barcode information in the results. The following parameter is available: &lt;ul&gt;&lt;li&gt;barcode&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationBarcode[]**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBarcodesPost

> \OpenAPI\Client\Model\VariationBarcode restItemsIdVariationsVariationIdVariationBarcodesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_barcodes)

Create a variation barcode

Creates a variation barcode. The ID of the item, the ID of the variation, the ID of the barcode and the code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_barcodes = new \OpenAPI\Client\Model\InlineObject119(); // \OpenAPI\Client\Model\InlineObject119 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_barcodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_barcodes** | [**\OpenAPI\Client\Model\InlineObject119**](../Model/InlineObject119.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationBarcode**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete

> object restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete($id, $variation_id, $bundle_id)

Remove a bundle component

Removes a component from a bundle. The bundle ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$bundle_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete($id, $variation_id, $bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **bundle_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBundlesBundleIdGet

> \OpenAPI\Client\Model\VariationBundle restItemsIdVariationsVariationIdVariationBundlesBundleIdGet($id, $variation_id, $bundle_id)

Get a variation bundle

Gets the bundle information for a specific bundle component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$bundle_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesBundleIdGet($id, $variation_id, $bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesBundleIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **bundle_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationBundle**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBundlesBundleIdPut

> \OpenAPI\Client\Model\VariationBundle restItemsIdVariationsVariationIdVariationBundlesBundleIdPut($id, $variation_id, $bundle_id, $_rest_items_id_variations_variation_id_variation_bundles_bundle_id)

Update a variation bundle

Updates a variation bundle component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$bundle_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_bundles_bundle_id = new \OpenAPI\Client\Model\InlineObject122(); // \OpenAPI\Client\Model\InlineObject122 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesBundleIdPut($id, $variation_id, $bundle_id, $_rest_items_id_variations_variation_id_variation_bundles_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesBundleIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **bundle_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_bundles_bundle_id** | [**\OpenAPI\Client\Model\InlineObject122**](../Model/InlineObject122.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationBundle**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBundlesGet

> \OpenAPI\Client\Model\VariationBundle[] restItemsIdVariationsVariationIdVariationBundlesGet($id, $variation_id)

List bundle components

List all components of a bundle. The ID of the item and the ID of the variation to which bundle components were added must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationBundle[]**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationBundlesPost

> \OpenAPI\Client\Model\VariationBundle restItemsIdVariationsVariationIdVariationBundlesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_bundles)

Add a variation to a bundle

Adds a variation to a bundle variation as a bundle component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_bundles = new \OpenAPI\Client\Model\InlineObject121(); // \OpenAPI\Client\Model\InlineObject121 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_bundles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_bundles** | [**\OpenAPI\Client\Model\InlineObject121**](../Model/InlineObject121.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationBundle**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete

> object restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete($id, $variation_id, $cat_id)

Remove a category from a variation

Deletes the link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$cat_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete($id, $variation_id, $cat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **cat_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationCategoriesCatIdGet

> \OpenAPI\Client\Model\VariationCategory restItemsIdVariationsVariationIdVariationCategoriesCatIdGet($id, $variation_id, $cat_id)

Get link between category and variation

Gets the link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$cat_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesCatIdGet($id, $variation_id, $cat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesCatIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **cat_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationCategoriesCatIdPut

> \OpenAPI\Client\Model\VariationCategory restItemsIdVariationsVariationIdVariationCategoriesCatIdPut($id, $variation_id, $cat_id, $_rest_items_id_variations_variation_id_variation_categories_cat_id)

Update variation category link

Updates the link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$cat_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_categories_cat_id = new \OpenAPI\Client\Model\InlineObject124(); // \OpenAPI\Client\Model\InlineObject124 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesCatIdPut($id, $variation_id, $cat_id, $_rest_items_id_variations_variation_id_variation_categories_cat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesCatIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **cat_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_categories_cat_id** | [**\OpenAPI\Client\Model\InlineObject124**](../Model/InlineObject124.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationCategoriesGet

> \OpenAPI\Client\Model\VariationCategory restItemsIdVariationsVariationIdVariationCategoriesGet($id, $variation_id)

List categories linked to a variation

Lists all categories linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationCategoriesPost

> \OpenAPI\Client\Model\VariationCategory restItemsIdVariationsVariationIdVariationCategoriesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_categories)

Link a category to a variation

Creates a link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_categories = new \OpenAPI\Client\Model\InlineObject123(); // \OpenAPI\Client\Model\InlineObject123 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_categories** | [**\OpenAPI\Client\Model\InlineObject123**](../Model/InlineObject123.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationClientsGet

> \OpenAPI\Client\Model\VariationClient[] restItemsIdVariationsVariationIdVariationClientsGet($id, $variation_id)

List clients linked to a variation

Lists all clients (stores) linked to a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationClientsGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationClientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationClient[]**](../Model/VariationClient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete

> object restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete($id, $variation_id, $plenty_id)

Unlink a client from a variation

Deletes the link between a client (store) and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$plenty_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete($id, $variation_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **plenty_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationClientsPost

> \OpenAPI\Client\Model\VariationClient restItemsIdVariationsVariationIdVariationClientsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_clients)

Link a client to a variation

Creates a link between a client (store) and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_clients = new \OpenAPI\Client\Model\InlineObject125(); // \OpenAPI\Client\Model\InlineObject125 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationClientsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_clients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationClientsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_clients** | [**\OpenAPI\Client\Model\InlineObject125**](../Model/InlineObject125.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationClient**](../Model/VariationClient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationComponentBundlesGet

> \OpenAPI\Client\Model\VariationBundle[] restItemsIdVariationsVariationIdVariationComponentBundlesGet($id, $variation_id)

List bundles

List the bundles that the variation is a component of. The variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationComponentBundlesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationComponentBundlesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationBundle[]**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationDefaultCategoriesGet

> \OpenAPI\Client\Model\VariationDefaultCategory[] restItemsIdVariationsVariationIdVariationDefaultCategoriesGet($id, $variation_id)

List default category links

Lists the default category of a variation for all clients (stores). The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationDefaultCategory[]**](../Model/VariationDefaultCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete

> object restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete($id, $variation_id, $plenty_id)

Delete a default category link

Deletes a link between a variation and a category that designates this category as the default category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$plenty_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete($id, $variation_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **plenty_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet

> \OpenAPI\Client\Model\VariationDefaultCategory restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet($id, $variation_id, $plenty_id)

Gets a default category link

Gets the default category linked to a variation for the specified client (store). The ID of the item, the ID of the variation and the ID of the client (store) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$plenty_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet($id, $variation_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **plenty_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationDefaultCategory**](../Model/VariationDefaultCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationDefaultCategoriesPost

> \OpenAPI\Client\Model\VariationDefaultCategory restItemsIdVariationsVariationIdVariationDefaultCategoriesPost($id, $variation_id)

Create a default category link

Creates a link between a variation and a category that designates the category as the default category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationDefaultCategory**](../Model/VariationDefaultCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationImagesGet

> \OpenAPI\Client\Model\VariationImage restItemsIdVariationsVariationIdVariationImagesGet($id, $variation_id, $updated_at)

List image links of a variation

Lists all images linked to a variation. The variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to variation images updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationImagesGet($id, $variation_id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **updated_at** | **string**| Filter restricts the list of results to variation images updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationImagesImageIdDelete

> object restItemsIdVariationsVariationIdVariationImagesImageIdDelete($id, $variation_id, $image_id)

Delete an image link

Deletes a link between an image and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$image_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationImagesImageIdDelete($id, $variation_id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationImagesImageIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **image_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationImagesPost

> \OpenAPI\Client\Model\VariationImage restItemsIdVariationsVariationIdVariationImagesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_images)

Create an image link

Creates a link between an image and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_images = new \OpenAPI\Client\Model\InlineObject126(); // \OpenAPI\Client\Model\InlineObject126 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationImagesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_images);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_images** | [**\OpenAPI\Client\Model\InlineObject126**](../Model/InlineObject126.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationMarketsDelete

> restItemsIdVariationsVariationIdVariationMarketsDelete($id, $variation_id)

Delete all market links of one variation

Deletes all links of one variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $apiInstance->restItemsIdVariationsVariationIdVariationMarketsDelete($id, $variation_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationMarketsGet

> \OpenAPI\Client\Model\VariationMarket[] restItemsIdVariationsVariationIdVariationMarketsGet($id, $variation_id)

List markets linked to a variation

Lists all markets linked to a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationMarketsGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationMarket[]**](../Model/VariationMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete

> object restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete($id, $variation_id, $marketplace_id)

Delete link between variation and market

Deletes a link between a variation and a market. The ID of the item, the ID of the variation and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$marketplace_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete($id, $variation_id, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **marketplace_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationMarketsPost

> \OpenAPI\Client\Model\VariationMarket restItemsIdVariationsVariationIdVariationMarketsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_markets)

Create link between variation and market

Creates a link between a variation and a market. The ID of the item, the ID of the variation and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_markets = new \OpenAPI\Client\Model\InlineObject127(); // \OpenAPI\Client\Model\InlineObject127 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationMarketsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_markets** | [**\OpenAPI\Client\Model\InlineObject127**](../Model/InlineObject127.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationMarket**](../Model/VariationMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationPropertiesDelete

> object restItemsIdVariationsVariationIdVariationPropertiesDelete($id, $variation_id)

Deletes all links between a variation and its property values

Deletes all links between a variation and its property values. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesDelete($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationPropertiesGet

> \OpenAPI\Client\Model\VariationPropertyValue[] restItemsIdVariationsVariationIdVariationPropertiesGet($id, $variation_id)

List property values linked to a variation

Lists the property values linked to a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValue[]**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationPropertiesPost

> \OpenAPI\Client\Model\VariationPropertyValue restItemsIdVariationsVariationIdVariationPropertiesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_properties)

Create link between variation and property value

Creates a link between a variation and a property value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_properties = new \OpenAPI\Client\Model\InlineObject128(); // \OpenAPI\Client\Model\InlineObject128 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_properties** | [**\OpenAPI\Client\Model\InlineObject128**](../Model/InlineObject128.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValue**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete

> object restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete($id, $variation_id, $property_id)

Delete link between variation and property value

Delete a link between a variation and a property value. The ID of the item, the ID of the variation and the ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete($id, $variation_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet

> \OpenAPI\Client\Model\VariationPropertyValue restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet($id, $variation_id, $property_id)

Get a property value

Gets a property value linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet($id, $variation_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValue**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut

> \OpenAPI\Client\Model\VariationPropertyValue restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut($id, $variation_id, $property_id, $_rest_items_id_variations_variation_id_variation_properties_property_id)

Update a property value

Update the data of a property value linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_properties_property_id = new \OpenAPI\Client\Model\InlineObject129(); // \OpenAPI\Client\Model\InlineObject129 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut($id, $variation_id, $property_id, $_rest_items_id_variations_variation_id_variation_properties_property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_properties_property_id** | [**\OpenAPI\Client\Model\InlineObject129**](../Model/InlineObject129.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValue**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSalesPricesDelete

> object restItemsIdVariationsVariationIdVariationSalesPricesDelete($id, $variation_id)

Delete all links between a variation and its sales prices

Deletes all links between a variation and its sales prices and deletes the sales price data. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesDelete($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSalesPricesGet

> \OpenAPI\Client\Model\VariationSalesPrice[] restItemsIdVariationsVariationIdVariationSalesPricesGet($id, $variation_id)

List sales prices of a variation

Lists the sales prices of a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSalesPrice[]**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSalesPricesPost

> \OpenAPI\Client\Model\VariationSalesPrice restItemsIdVariationsVariationIdVariationSalesPricesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_sales_prices)

Create link between variation and sales price

Creates a link between a variation and a sales price and adds sales price data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_sales_prices = new \OpenAPI\Client\Model\InlineObject130(); // \OpenAPI\Client\Model\InlineObject130 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_sales_prices** | [**\OpenAPI\Client\Model\InlineObject130**](../Model/InlineObject130.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationSalesPrice**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete

> object restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete($id, $variation_id, $price_id)

Delete link between variation and sales price

Deletes a link between a variation and a sales price and deletes the sales price data. The ID of the sales price and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$price_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete($id, $variation_id, $price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **price_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet

> \OpenAPI\Client\Model\VariationSalesPrice restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet($id, $variation_id, $price_id)

Get sales price data for a variation

Gets sales price data linked to a variation. The ID of the sales price and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$price_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet($id, $variation_id, $price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **price_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSalesPrice**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut

> \OpenAPI\Client\Model\VariationSalesPrice restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut($id, $variation_id, $price_id, $_rest_items_id_variations_variation_id_variation_sales_prices_price_id)

Update sales price data

Updates sales price data linked to a variation. The ID of the sales price and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$price_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_sales_prices_price_id = new \OpenAPI\Client\Model\InlineObject131(); // \OpenAPI\Client\Model\InlineObject131 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut($id, $variation_id, $price_id, $_rest_items_id_variations_variation_id_variation_sales_prices_price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **price_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_sales_prices_price_id** | [**\OpenAPI\Client\Model\InlineObject131**](../Model/InlineObject131.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationSalesPrice**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSkusGet

> \OpenAPI\Client\Model\VariationSku[] restItemsIdVariationsVariationIdVariationSkusGet($id, $variation_id)

List SKUs

Lists the SKUs of a variation. Filters must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSku[]**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSkusPost

> \OpenAPI\Client\Model\VariationSku restItemsIdVariationsVariationIdVariationSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_skus)

Create an SKU

Creates an SKU. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_skus = new \OpenAPI\Client\Model\InlineObject132(); // \OpenAPI\Client\Model\InlineObject132 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_skus** | [**\OpenAPI\Client\Model\InlineObject132**](../Model/InlineObject132.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationSku**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSkusSkuIdDelete

> object restItemsIdVariationsVariationIdVariationSkusSkuIdDelete($id, $variation_id, $sku_id)

Delete an SKU

Deletes an SKU. The ID of the SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$sku_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusSkuIdDelete($id, $variation_id, $sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusSkuIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **sku_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSkusSkuIdGet

> \OpenAPI\Client\Model\VariationSku restItemsIdVariationsVariationIdVariationSkusSkuIdGet($id, $variation_id, $sku_id)

Get an SKU

Gets an SKU. The ID of the SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$sku_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusSkuIdGet($id, $variation_id, $sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusSkuIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **sku_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSku**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSkusSkuIdPut

> \OpenAPI\Client\Model\VariationSku restItemsIdVariationsVariationIdVariationSkusSkuIdPut($id, $variation_id, $sku_id, $_rest_items_id_variations_variation_id_variation_skus_sku_id)

Update an SKU

Updates an SKU. The ID of the SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$sku_id = 56; // int | 
$_rest_items_id_variations_variation_id_variation_skus_sku_id = new \OpenAPI\Client\Model\InlineObject133(); // \OpenAPI\Client\Model\InlineObject133 | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusSkuIdPut($id, $variation_id, $sku_id, $_rest_items_id_variations_variation_id_variation_skus_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusSkuIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **sku_id** | **int**|  |
 **_rest_items_id_variations_variation_id_variation_skus_sku_id** | [**\OpenAPI\Client\Model\InlineObject133**](../Model/InlineObject133.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationSku**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSuppliersGet

> \OpenAPI\Client\Model\VariationSupplier[] restItemsIdVariationsVariationIdVariationSuppliersGet($id, $variation_id)

Lists suppliers for a variation

Lists all supplier data linked to a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSupplier[]**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSuppliersPost

> \OpenAPI\Client\Model\VariationSupplier restItemsIdVariationsVariationIdVariationSuppliersPost($id, $variation_id)

Create a link between variation and supplier

Creates a link between a variation and a supplier and adds supplier data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSupplier**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete

> object restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete($id, $variation_id, $variation_supplier_id)

Delete link between variation and supplier

Deletes a link between a variation and a supplier. The ID of the variation and the ID of the link between the variation and the supplier must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$variation_supplier_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete($id, $variation_id, $variation_supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **variation_supplier_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet

> \OpenAPI\Client\Model\VariationSupplier restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet($id, $variation_id, $variation_supplier_id)

Get supplier data for a variation

Gets the data for a supplier linked to a variation. The ID of the variation and the ID of the link between the variation and the supplier must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$variation_supplier_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet($id, $variation_id, $variation_supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **variation_supplier_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSupplier**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut

> \OpenAPI\Client\Model\VariationSupplier restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut($id, $variation_id, $variation_supplier_id)

Updates supplier data for a variation

Updates the data of a supplier linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$variation_supplier_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut($id, $variation_id, $variation_supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **variation_supplier_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationSupplier**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationWarehousesGet

> \OpenAPI\Client\Model\VariationWarehouse[] restItemsIdVariationsVariationIdVariationWarehousesGet($id, $variation_id)

List the warehouses linked to a variation

Lists the warehouses linked to a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationWarehouse[]**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationWarehousesPost

> \OpenAPI\Client\Model\VariationWarehouse restItemsIdVariationsVariationIdVariationWarehousesPost($id, $variation_id)

Create link between a variation and a warehouse

Creates a link between a variation and a warehouse and adds warehouse data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationWarehouse**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete

> object restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete($id, $variation_id, $warehouse_id)

Delete link between a warehouse and a variation

Deletes the link between a warehouse and a variation. The ID of the variation and the ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$warehouse_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete($id, $variation_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **warehouse_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet

> \OpenAPI\Client\Model\VariationWarehouse restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet($id, $variation_id, $warehouse_id)

Get warehouse data for a variation

Gets the data of a warehouse linked to a variation. The ID of the variation and the ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$warehouse_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet($id, $variation_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **warehouse_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationWarehouse**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut

> \OpenAPI\Client\Model\VariationWarehouse restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut($id, $variation_id, $warehouse_id)

Update warehouse data of a variation

Updates the data of a warehouse linked to a variation. The ID of the variation and the ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$variation_id = 56; // int | 
$warehouse_id = 56; // int | 

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut($id, $variation_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **variation_id** | **int**|  |
 **warehouse_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationWarehouse**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdDelete

> object restItemsItemIdDelete($item_id)

Delete an item

Deletes an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdDelete($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdFillPost

> restItemsItemIdFillPost($item_id)

Fill item to es

Fills item to es. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 

try {
    $apiInstance->restItemsItemIdFillPost($item_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdFillPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdGet

> \OpenAPI\Client\Model\Item restItemsItemIdGet($item_id, $lang)

Show an item

Show an item by itemId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.

try {
    $result = $apiInstance->restItemsItemIdGet($item_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional]

### Return type

[**\OpenAPI\Client\Model\Item**](../Model/Item.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdItemShippingProfilesDelete

> restItemsItemIdItemShippingProfilesDelete($item_id)

Deactivate shipping profiles of an item

Deactivates all shipping profiles of an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 

try {
    $apiInstance->restItemsItemIdItemShippingProfilesDelete($item_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdItemShippingProfilesGet

> \OpenAPI\Client\Model\ItemShippingProfiles[] restItemsItemIdItemShippingProfilesGet($item_id)

List shipping profiles of an item

Lists the shipping profiles linked to an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdItemShippingProfilesGet($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemShippingProfiles[]**](../Model/ItemShippingProfiles.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdItemShippingProfilesIdDelete

> object restItemsItemIdItemShippingProfilesIdDelete($item_id, $id)

Deactivate a shipping profile

Unlinks a shipping profile from the item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The unique ID of the item
$id = 56; // int | The unique ID of the link between item and shipping profile

try {
    $result = $apiInstance->restItemsItemIdItemShippingProfilesIdDelete($item_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The unique ID of the item |
 **id** | **int**| The unique ID of the link between item and shipping profile |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdItemShippingProfilesPost

> \OpenAPI\Client\Model\ItemShippingProfiles restItemsItemIdItemShippingProfilesPost($item_id)

Activate a shipping profile

Links a shipping profile to the item. The ID of the item and the ID of the shipping profile must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdItemShippingProfilesPost($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ItemShippingProfiles**](../Model/ItemShippingProfiles.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdPut

> \OpenAPI\Client\Model\Item restItemsItemIdPut($item_id, $_rest_items_item_id)

Update a item

Updates a item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$_rest_items_item_id = new \OpenAPI\Client\Model\InlineObject134(); // \OpenAPI\Client\Model\InlineObject134 | 

try {
    $result = $apiInstance->restItemsItemIdPut($item_id, $_rest_items_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **_rest_items_item_id** | [**\OpenAPI\Client\Model\InlineObject134**](../Model/InlineObject134.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Item**](../Model/Item.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsGet

> \OpenAPI\Client\Model\InlineResponse20020 restItemsItemIdVariationsGet($item_id, $with, $lang, $page, $items_per_page, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $supplier_number, $manufacturer_id, $updated_between, $created_between, $related_updated_between)

List variations of an item

Lists all variations of an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
$is_main = True; // bool | Filter restricts the list of results to variations that are main variations.
$is_active = True; // bool | Filter restricts the list of results to variations that are active.
$barcode = 'barcode_example'; // string | Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
$number_exact = 'number_exact_example'; // string | Filter restricts the list of results to the variation with the variation number specified.
$number_fuzzy = 'number_fuzzy_example'; // string | Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
$is_bundle = True; // bool | Filter restricts the list of results to variations to which variations were added to create a bundle.
$supplier_number = 'supplier_number_example'; // string | Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
$manufacturer_id = 56; // int | Filter restricts the list of results to variations with the specified manufacturer ID.
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
$created_between = 'created_between_example'; // string | Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
$related_updated_between = 'related_updated_between_example'; // string | Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.

try {
    $result = $apiInstance->restItemsItemIdVariationsGet($item_id, $with, $lang, $page, $items_per_page, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $supplier_number, $manufacturer_id, $updated_between, $created_between, $related_updated_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **with** | **string**| Includes the specified variation information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationProperties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationBarcodes&lt;/b&gt; &#x3D; The barcode linked to the variation and the saved code&lt;/li&gt;&lt;li&gt;variationBundleComponents&lt;/b&gt; &#x3D; The bundle components of the variation and their quantities&lt;/li&gt;&lt;li&gt;variationComponentBundles&lt;/b&gt; &#x3D; The bundles that this variation is a component of&lt;/li&gt;&lt;li&gt;variationSalesPrices&lt;/b&gt; &#x3D; The sales prices linked to the variation and the saved price&lt;/li&gt;&lt;li&gt;marketItemNumbers&lt;/b&gt; &#x3D; The market ident number of the variation&lt;/li&gt;&lt;li&gt;variationCategories&lt;/b&gt; &#x3D; The categories linked to the variation&lt;/li&gt;&lt;li&gt;variationClients&lt;/b&gt; &#x3D; The clients (stores) for which the variation is activated&lt;/li&gt;&lt;li&gt;variationMarkets&lt;/b&gt; &#x3D; The markets for which the variation is activated &lt;/li&gt;&lt;li&gt;variationDefaultCategory&lt;/b&gt; &#x3D; The default category of the variation&lt;/li&gt;&lt;li&gt;variationSuppliers&lt;/b&gt; &#x3D; The supplier data associated with the variation&lt;/li&gt;&lt;li&gt;variationWarehouses&lt;/b&gt; &#x3D; The warehouse data associated with the variation&lt;/li&gt;&lt;li&gt;images&lt;/b&gt; &#x3D; The images linked to the variation&lt;/li&gt;&lt;li&gt;itemImages&lt;/b&gt; &#x3D; The images linked to the item&lt;/li&gt;&lt;li&gt;variationAttributeValues&lt;/b&gt; &#x3D; The attribute values of the variation&lt;/li&gt;&lt;li&gt;variationSkus&lt;/b&gt; &#x3D; The SKU data associated with the variation&lt;/li&gt;&lt;li&gt;variationAdditionalSkus&lt;/b&gt; &#x3D; The additional SKU data associated with the variation&lt;/li&gt;&lt;li&gt;unit&lt;/b&gt; &#x3D; The unit assigned to the variation&lt;/li&gt;&lt;li&gt;parent&lt;/b&gt; &#x3D; The main variation of the variation. Value is null if this variation is the item&#39;s main variation.&lt;/li&gt;&lt;li&gt;item&lt;/b&gt; &#x3D; The item of the variation&lt;/li&gt;&lt;li&gt;stock&lt;/b&gt; &#x3D; The stock data of the variation&lt;/li&gt;&lt;/ul&gt; For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas. | [optional]
 **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional]
 **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional]
 **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. | [optional]
 **is_main** | **bool**| Filter restricts the list of results to variations that are main variations. | [optional]
 **is_active** | **bool**| Filter restricts the list of results to variations that are active. | [optional]
 **barcode** | **string**| Filter restricts the list of results to variations with the specified barcode. A barcode must be specified. | [optional]
 **number_exact** | **string**| Filter restricts the list of results to the variation with the variation number specified. | [optional]
 **number_fuzzy** | **string**| Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312. | [optional]
 **is_bundle** | **bool**| Filter restricts the list of results to variations to which variations were added to create a bundle. | [optional]
 **supplier_number** | **string**| Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified. | [optional]
 **manufacturer_id** | **int**| Filter restricts the list of results to variations with the specified manufacturer ID. | [optional]
 **updated_between** | **string**| Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween&#x3D;1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween&#x3D;1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported. | [optional]
 **created_between** | **string**| Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween&#x3D;1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween&#x3D;1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported. | [optional]
 **related_updated_between** | **string**| Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsPost

> \OpenAPI\Client\Model\Variation restItemsItemIdVariationsPost($item_id, $_rest_items_item_id_variations)

Create a variation

Create a variation. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$_rest_items_item_id_variations = new \OpenAPI\Client\Model\InlineObject135(); // \OpenAPI\Client\Model\InlineObject135 | 

try {
    $result = $apiInstance->restItemsItemIdVariationsPost($item_id, $_rest_items_item_id_variations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **_rest_items_item_id_variations** | [**\OpenAPI\Client\Model\InlineObject135**](../Model/InlineObject135.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Variation**](../Model/Variation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdDelete

> object restItemsItemIdVariationsVariationIdDelete($item_id, $variation_id)

Delete a variation

Delete a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdDelete($item_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdFillPost

> restItemsItemIdVariationsVariationIdFillPost($item_id, $variation_id)

Fill a variation

Fills a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 

try {
    $apiInstance->restItemsItemIdVariationsVariationIdFillPost($item_id, $variation_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdFillPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdGet

> \OpenAPI\Client\Model\Variation restItemsItemIdVariationsVariationIdGet($item_id, $variation_id, $with)

Get a variation

Get a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdGet($item_id, $variation_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **with** | **string**| Includes the specified variation information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationProperties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationBarcodes&lt;/b&gt; &#x3D; The barcode linked to the variation and the saved code&lt;/li&gt;&lt;li&gt;variationBundleComponents&lt;/b&gt; &#x3D; The bundle components of the variation and their quantities&lt;/li&gt;&lt;li&gt;variationComponentBundles&lt;/b&gt; &#x3D; The bundles that this variation is a component of&lt;/li&gt;&lt;li&gt;variationSalesPrices&lt;/b&gt; &#x3D; The sales prices linked to the variation and the saved price&lt;/li&gt;&lt;li&gt;marketItemNumbers&lt;/b&gt; &#x3D; The market ident number of the variation&lt;/li&gt;&lt;li&gt;variationCategories&lt;/b&gt; &#x3D; The categories linked to the variation&lt;/li&gt;&lt;li&gt;variationClients&lt;/b&gt; &#x3D; The clients (stores) for which the variation is activated&lt;/li&gt;&lt;li&gt;variationMarkets&lt;/b&gt; &#x3D; The markets for which the variation is activated &lt;/li&gt;&lt;li&gt;variationDefaultCategory&lt;/b&gt; &#x3D; The default category of the variation&lt;/li&gt;&lt;li&gt;variationSuppliers&lt;/b&gt; &#x3D; The supplier data associated with the variation&lt;/li&gt;&lt;li&gt;variationWarehouses&lt;/b&gt; &#x3D; The warehouse data associated with the variation&lt;/li&gt;&lt;li&gt;images&lt;/b&gt; &#x3D; The images linked to the variation&lt;/li&gt;&lt;li&gt;itemImages&lt;/b&gt; &#x3D; The images linked to the item&lt;/li&gt;&lt;li&gt;variationAttributeValues&lt;/b&gt; &#x3D; The attribute values of the variation&lt;/li&gt;&lt;li&gt;variationSkus&lt;/b&gt; &#x3D; The SKU data associated with the variation&lt;/li&gt;&lt;li&gt;variationAdditionalSkus&lt;/b&gt; &#x3D; The additional SKU data associated with the variation&lt;/li&gt;&lt;li&gt;unit&lt;/b&gt; &#x3D; The unit assigned to the variation&lt;/li&gt;&lt;li&gt;parent&lt;/b&gt; &#x3D; The main variation of the variation. Value is null if this variation is the item&#39;s main variation.&lt;/li&gt;&lt;li&gt;item&lt;/b&gt; &#x3D; The item of the variation&lt;/li&gt;&lt;li&gt;stock&lt;/b&gt; &#x3D; The stock data of the variation&lt;/li&gt;&lt;/ul&gt; For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas. | [optional]

### Return type

[**\OpenAPI\Client\Model\Variation**](../Model/Variation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdPut

> \OpenAPI\Client\Model\Variation restItemsItemIdVariationsVariationIdPut($item_id, $variation_id, $_rest_items_item_id_variations_variation_id)

Update a variation

Updates a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$_rest_items_item_id_variations_variation_id = new \OpenAPI\Client\Model\InlineObject136(); // \OpenAPI\Client\Model\InlineObject136 | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdPut($item_id, $variation_id, $_rest_items_item_id_variations_variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **_rest_items_item_id_variations_variation_id** | [**\OpenAPI\Client\Model\InlineObject136**](../Model/InlineObject136.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Variation**](../Model/Variation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet

> \OpenAPI\Client\Model\VariationPropertyValueText[] restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet($item_id, $variation_id, $property_id)

Get property value texts

Gets the texts saved for a specific property of the type Text in all available languages. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet($item_id, $variation_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValueText[]**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete

> object restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete($item_id, $variation_id, $property_id, $lang)

Delete property value text by language

Deletes the text saved for a specific property of the type Text in the specified language. The ID of the property  and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete($item_id, $variation_id, $property_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet

> \OpenAPI\Client\Model\VariationPropertyValueText restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet($item_id, $variation_id, $property_id, $lang)

Get property value text by language

Gets the value text saved for a specific property of the type Text in the specified language. The ID of the property  and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet($item_id, $variation_id, $property_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValueText**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut

> \OpenAPI\Client\Model\VariationPropertyValueText restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut($item_id, $variation_id, $property_id, $lang, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang)

Update property value text by language

Updates the text saved for a specific property of the type Text in the specified language. The ID of the property and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 
$lang = 56; // int | 
$_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang = new \OpenAPI\Client\Model\InlineObject138(); // \OpenAPI\Client\Model\InlineObject138 | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut($item_id, $variation_id, $property_id, $lang, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang** | [**\OpenAPI\Client\Model\InlineObject138**](../Model/InlineObject138.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValueText**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost

> \OpenAPI\Client\Model\VariationPropertyValueText restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost($item_id, $variation_id, $property_id, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts)

Create property value text by language

Saves text for a specific property of the type Text in the specified language. The ID of the property and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | 
$variation_id = 56; // int | 
$property_id = 56; // int | 
$_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts = new \OpenAPI\Client\Model\InlineObject137(); // \OpenAPI\Client\Model\InlineObject137 | 

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost($item_id, $variation_id, $property_id, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **variation_id** | **int**|  |
 **property_id** | **int**|  |
 **_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts** | [**\OpenAPI\Client\Model\InlineObject137**](../Model/InlineObject137.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariationPropertyValueText**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemShippingProfilesGet

> \OpenAPI\Client\Model\InlineResponse2005 restItemsItemShippingProfilesGet()

List all shipping profiles of all items

Lists all shipping profiles of all items. Results can be filtered by the timestamp of the link between items and shipping profiles (eq, lt, lte, gt, gte, between). <ul> <li>eq = Equal to</li> <li>gte = Greater than or equal to</li> <li>gt = Greater than</li> <li>lte = Less than or equal to</li> <li>lt = Less than</li> <li>between = Date range</li> </ul> Example: updated=gt:2018-04-16 16:00:00 returns all items with shipping profiles that were activated after 4pm on the 16th of April 2018.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsItemShippingProfilesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemShippingProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsItemShippingProfilesPost

> object restItemsItemShippingProfilesPost()

Bulk activate shipping profiles

Activates up to 50 shipping profiles for items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsItemShippingProfilesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemShippingProfilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsLabelsGet

> object[] restItemsLabelsGet()

List item label templates

Lists the ID and name of all item label templates saved in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsLabelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsLabelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersGet

> \OpenAPI\Client\Model\InlineResponse20015 restItemsManufacturersGet($with, $updated_at, $name)

List manufacturers

Lists all manufacturers in the system.  Display a listing of the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified manufacturer information in the results. The following parameters are available: commissions, externals
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to records updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
$name = 'name_example'; // string | Filter restricts the list of results to records with specified name.

try {
    $result = $apiInstance->restItemsManufacturersGet($with, $updated_at, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| Includes the specified manufacturer information in the results. The following parameters are available: commissions, externals | [optional]
 **updated_at** | **string**| Filter restricts the list of results to records updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]
 **name** | **string**| Filter restricts the list of results to records with specified name. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdCommissionsGet

> \OpenAPI\Client\Model\ManufacturerCommission[] restItemsManufacturersIdCommissionsGet($id)

List commissions

Lists all commissions associated with a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ManufacturerCommission[]**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdCommissionsManufacturerIdDelete

> object restItemsManufacturersIdCommissionsManufacturerIdDelete($id, $manufacturer_id)

Delete a commission

Delete a commission. The ID of the commission must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$manufacturer_id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsManufacturerIdDelete($id, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsManufacturerIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **manufacturer_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdCommissionsManufacturerIdGet

> \OpenAPI\Client\Model\ManufacturerCommission restItemsManufacturersIdCommissionsManufacturerIdGet($id, $manufacturer_id)

Get a commission

Gets a commission for a manufacturer. The ID of the commission must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$manufacturer_id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsManufacturerIdGet($id, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsManufacturerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **manufacturer_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ManufacturerCommission**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdCommissionsManufacturerIdPut

> \OpenAPI\Client\Model\ManufacturerCommission restItemsManufacturersIdCommissionsManufacturerIdPut($id, $manufacturer_id)

Update a commission

Updates a commission. The ID of the commission must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$manufacturer_id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsManufacturerIdPut($id, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsManufacturerIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **manufacturer_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ManufacturerCommission**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdCommissionsPost

> \OpenAPI\Client\Model\ManufacturerCommission restItemsManufacturersIdCommissionsPost($id)

Create a commission

Creates a commission for a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ManufacturerCommission**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdDelete

> object restItemsManufacturersIdDelete($id)

Delete a manufacturer

Deletes a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdGet

> \OpenAPI\Client\Model\Manufacturer restItemsManufacturersIdGet($id)

Get a manufacturer

Gets a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersIdPut

> \OpenAPI\Client\Model\Manufacturer restItemsManufacturersIdPut($id)

Update a manufacturer

Updates a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsManufacturersIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsManufacturersPost

> \OpenAPI\Client\Model\Manufacturer restItemsManufacturersPost()

Create a manufacturer

Creates a manufacturer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsManufacturersPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPackingUnitsGet

> \OpenAPI\Client\Model\PackingUnit[] restItemsPackingUnitsGet($language)

Get the item variation packing units

Returns the packing units for the item variations based on the language wanted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string | The language to return the unit name for. If no language is provided, all the languages will be returned

try {
    $result = $apiInstance->restItemsPackingUnitsGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPackingUnitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| The language to return the unit name for. If no language is provided, all the languages will be returned | [optional]

### Return type

[**\OpenAPI\Client\Model\PackingUnit[]**](../Model/PackingUnit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPackingUnitsIdGet

> \OpenAPI\Client\Model\PackingUnit restItemsPackingUnitsIdGet($id, $language, $is_unit_id)

Get the item variation packing unit for a specific given id

Returns the packing unit for the item variations based on the given ID, the language wanted and the flag to say if the ID provided is the a unit ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the packing unit
$language = 'language_example'; // string | The language to return the unit name for. If no language is provided, all the languages will be returned
$is_unit_id = True; // bool | A flag to say if the ID provided is the unit ID or not. If true, the unit ID will be taken into account to get the result

try {
    $result = $apiInstance->restItemsPackingUnitsIdGet($id, $language, $is_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPackingUnitsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the packing unit |
 **language** | **string**| The language to return the unit name for. If no language is provided, all the languages will be returned | [optional]
 **is_unit_id** | **bool**| A flag to say if the ID provided is the unit ID or not. If true, the unit ID will be taken into account to get the result | [optional]

### Return type

[**\OpenAPI\Client\Model\PackingUnit**](../Model/PackingUnit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPost

> \OpenAPI\Client\Model\Item restItemsPost($_rest_items)

Create new items

Create new items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items = new \OpenAPI\Client\Model\InlineObject51(); // \OpenAPI\Client\Model\InlineObject51 | 

try {
    $result = $apiInstance->restItemsPost($_rest_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items** | [**\OpenAPI\Client\Model\InlineObject51**](../Model/InlineObject51.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Item**](../Model/Item.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesGet

> \OpenAPI\Client\Model\InlineResponse20016 restItemsPropertiesGet($with, $updated_at, $group_id, $page, $items_per_page)

List properties

Lists all properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified property information in the results. The following parameters are available: <ul><li>names</b> = The names of the property</li><li>group</b> = The property group assigned to the property</li><li>marketComponents</b> = Lists the markets where the property is available </li><li>selections</b> = Lists the selections of the property</li></ul> More than one parameter should be separated by commas.
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
$group_id = 'group_id_example'; // string | Filter restricts the list of results to items linked to a specified property group
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of properties to be listed per page must be specified.

try {
    $result = $apiInstance->restItemsPropertiesGet($with, $updated_at, $group_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| Includes the specified property information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the property&lt;/li&gt;&lt;li&gt;group&lt;/b&gt; &#x3D; The property group assigned to the property&lt;/li&gt;&lt;li&gt;marketComponents&lt;/b&gt; &#x3D; Lists the markets where the property is available &lt;/li&gt;&lt;li&gt;selections&lt;/b&gt; &#x3D; Lists the selections of the property&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional]
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]
 **group_id** | **string**| Filter restricts the list of results to items linked to a specified property group | [optional]
 **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional]
 **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of properties to be listed per page must be specified. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdDelete

> restItemsPropertiesIdDelete($id)

Delete a property

Deletes a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->restItemsPropertiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdGet

> \OpenAPI\Client\Model\Property restItemsPropertiesIdGet($id)

Get a property

Gets a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdMarketReferencesGet

> \OpenAPI\Client\Model\PropertyMarketReference[] restItemsPropertiesIdMarketReferencesGet($id)

List property market references

Lists the property market references of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyMarketReference[]**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdMarketReferencesMarketIdDelete

> object restItemsPropertiesIdMarketReferencesMarketIdDelete($id, $market_id)

Delete a property market reference

Deletes a property market reference. The ID of the property and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesMarketIdDelete($id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesMarketIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **market_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdMarketReferencesMarketIdGet

> \OpenAPI\Client\Model\PropertyMarketReference restItemsPropertiesIdMarketReferencesMarketIdGet($id, $market_id)

Get a property market reference

Gets a property market reference. The market ID and the property ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$market_id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesMarketIdGet($id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesMarketIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **market_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyMarketReference**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdMarketReferencesMarketIdPut

> \OpenAPI\Client\Model\PropertyMarketReference restItemsPropertiesIdMarketReferencesMarketIdPut($id, $market_id, $_rest_items_properties_id_market_references_market_id)

Update a property market reference

Updates a property market reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$market_id = 56; // int | 
$_rest_items_properties_id_market_references_market_id = new \OpenAPI\Client\Model\InlineObject69(); // \OpenAPI\Client\Model\InlineObject69 | 

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesMarketIdPut($id, $market_id, $_rest_items_properties_id_market_references_market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesMarketIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **market_id** | **int**|  |
 **_rest_items_properties_id_market_references_market_id** | [**\OpenAPI\Client\Model\InlineObject69**](../Model/InlineObject69.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyMarketReference**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdMarketReferencesPost

> \OpenAPI\Client\Model\PropertyMarketReference restItemsPropertiesIdMarketReferencesPost($id, $_rest_items_properties_id_market_references)

Create a property market reference

Creates a property market reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_properties_id_market_references = new \OpenAPI\Client\Model\InlineObject68(); // \OpenAPI\Client\Model\InlineObject68 | 

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesPost($id, $_rest_items_properties_id_market_references);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_properties_id_market_references** | [**\OpenAPI\Client\Model\InlineObject68**](../Model/InlineObject68.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyMarketReference**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdNamesGet

> \OpenAPI\Client\Model\PropertyName[] restItemsPropertiesIdNamesGet($id)

List the property names

Lists the names of a property in all languages. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyName[]**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdNamesLangDelete

> restItemsPropertiesIdNamesLangDelete($id, $lang)

Delete a property name

Deletes a property name. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $apiInstance->restItemsPropertiesIdNamesLangDelete($id, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdNamesLangGet

> \OpenAPI\Client\Model\PropertyName restItemsPropertiesIdNamesLangGet($id, $lang)

Get a property name

Gets a property name in a specified language. The ID of the property and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdNamesLangPut

> \OpenAPI\Client\Model\PropertyName restItemsPropertiesIdNamesLangPut($id, $lang, $_rest_items_properties_id_names_lang)

Update a property name

Updates a property name. The ID of the property and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 
$_rest_items_properties_id_names_lang = new \OpenAPI\Client\Model\InlineObject71(); // \OpenAPI\Client\Model\InlineObject71 | 

try {
    $result = $apiInstance->restItemsPropertiesIdNamesLangPut($id, $lang, $_rest_items_properties_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_properties_id_names_lang** | [**\OpenAPI\Client\Model\InlineObject71**](../Model/InlineObject71.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdNamesPost

> \OpenAPI\Client\Model\PropertyName restItemsPropertiesIdNamesPost($id, $_rest_items_properties_id_names)

Create a property name

Creates a property name. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_properties_id_names = new \OpenAPI\Client\Model\InlineObject70(); // \OpenAPI\Client\Model\InlineObject70 | 

try {
    $result = $apiInstance->restItemsPropertiesIdNamesPost($id, $_rest_items_properties_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_properties_id_names** | [**\OpenAPI\Client\Model\InlineObject70**](../Model/InlineObject70.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesIdPut

> \OpenAPI\Client\Model\Property restItemsPropertiesIdPut($id, $_rest_items_properties_id)

Update a property

Updates a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_properties_id = new \OpenAPI\Client\Model\InlineObject67(); // \OpenAPI\Client\Model\InlineObject67 | 

try {
    $result = $apiInstance->restItemsPropertiesIdPut($id, $_rest_items_properties_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_properties_id** | [**\OpenAPI\Client\Model\InlineObject67**](../Model/InlineObject67.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPost

> \OpenAPI\Client\Model\Property restItemsPropertiesPost($_rest_items_properties)

Create a property

Creates a property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_properties = new \OpenAPI\Client\Model\InlineObject66(); // \OpenAPI\Client\Model\InlineObject66 | 

try {
    $result = $apiInstance->restItemsPropertiesPost($_rest_items_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_properties** | [**\OpenAPI\Client\Model\InlineObject66**](../Model/InlineObject66.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsGet

> \OpenAPI\Client\Model\PropertySelection[] restItemsPropertiesPropertyIdSelectionsGet($property_id)

List property selections

Lists the property selections of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsGet($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsIdDelete

> object restItemsPropertiesPropertyIdSelectionsIdDelete($property_id, $id)

Delete a property selection

Deletes a property selection. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdDelete($property_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsIdGet

> \OpenAPI\Client\Model\PropertySelection[] restItemsPropertiesPropertyIdSelectionsIdGet($property_id, $id)

Get a property selection

Gets a property selection of a property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdGet($property_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsIdLangDelete

> object restItemsPropertiesPropertyIdSelectionsIdLangDelete($property_id, $id, $lang)

Delete a property selection language

Deletes a property selection language. The ID of the selection and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdLangDelete($property_id, $id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsIdLangGet

> \OpenAPI\Client\Model\PropertySelection restItemsPropertiesPropertyIdSelectionsIdLangGet($property_id, $id, $lang)

List property selections by language

Lists the property selections of a property for a specific language. The ID and language of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdLangGet($property_id, $id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsIdLangPut

> \OpenAPI\Client\Model\PropertySelection restItemsPropertiesPropertyIdSelectionsIdLangPut($property_id, $id, $lang, $_rest_items_properties_property_id_selections_id_lang)

Update a property selection

Updates a property selection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$id = 56; // int | 
$lang = 56; // int | 
$_rest_items_properties_property_id_selections_id_lang = new \OpenAPI\Client\Model\InlineObject74(); // \OpenAPI\Client\Model\InlineObject74 | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdLangPut($property_id, $id, $lang, $_rest_items_properties_property_id_selections_id_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_properties_property_id_selections_id_lang** | [**\OpenAPI\Client\Model\InlineObject74**](../Model/InlineObject74.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsIdPost

> \OpenAPI\Client\Model\PropertySelection restItemsPropertiesPropertyIdSelectionsIdPost($property_id, $id, $_rest_items_properties_property_id_selections_id)

Creates a property selection lang

Creates a property selection lang.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$id = 56; // int | 
$_rest_items_properties_property_id_selections_id = new \OpenAPI\Client\Model\InlineObject73(); // \OpenAPI\Client\Model\InlineObject73 | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdPost($property_id, $id, $_rest_items_properties_property_id_selections_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **id** | **int**|  |
 **_rest_items_properties_property_id_selections_id** | [**\OpenAPI\Client\Model\InlineObject73**](../Model/InlineObject73.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsLangGet

> \OpenAPI\Client\Model\PropertySelection[] restItemsPropertiesPropertyIdSelectionsLangGet($property_id, $lang)

List property selections

Lists the property selections of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsLangGet($property_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertiesPropertyIdSelectionsPost

> \OpenAPI\Client\Model\PropertySelection restItemsPropertiesPropertyIdSelectionsPost($property_id, $_rest_items_properties_property_id_selections)

Create a property selection

Creates a property selection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | 
$_rest_items_properties_property_id_selections = new \OpenAPI\Client\Model\InlineObject72(); // \OpenAPI\Client\Model\InlineObject72 | 

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsPost($property_id, $_rest_items_properties_property_id_selections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **int**|  |
 **_rest_items_properties_property_id_selections** | [**\OpenAPI\Client\Model\InlineObject72**](../Model/InlineObject72.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsGet

> \OpenAPI\Client\Model\InlineResponse20017 restItemsPropertyGroupsGet($with)

List property groups

Lists the property groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified property group information in the results. The following parameters are available: <ul><li>names</b> = The names of the property group</li><li>properties</b> = The properties that are assigned to the property group</li></ul> More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restItemsPropertyGroupsGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| Includes the specified property group information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the property group&lt;/li&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties that are assigned to the property group&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdDelete

> object restItemsPropertyGroupsIdDelete($id)

Delete a property group

Deletes a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdGet

> \OpenAPI\Client\Model\PropertyGroup restItemsPropertyGroupsIdGet($id)

Get a property group

Gets a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdNamesGet

> \OpenAPI\Client\Model\PropertyGroupName[] restItemsPropertyGroupsIdNamesGet($id)

List the property group names of a property group

Lists the property group names of a property group in all languages. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyGroupName[]**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdNamesLangDelete

> object restItemsPropertyGroupsIdNamesLangDelete($id, $lang)

Delete a property group name

Deletes a property group name. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesLangDelete($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdNamesLangGet

> \OpenAPI\Client\Model\PropertyGroupName restItemsPropertyGroupsIdNamesLangGet($id, $lang)

Get a property group name in a language

Gets a property group name in the specified language. The ID of the property group name and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdNamesLangPut

> \OpenAPI\Client\Model\PropertyGroupName restItemsPropertyGroupsIdNamesLangPut($id, $lang, $_rest_items_property_groups_id_names_lang)

Update a property group name

Updates a property group name. The ID of the property group and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 
$_rest_items_property_groups_id_names_lang = new \OpenAPI\Client\Model\InlineObject78(); // \OpenAPI\Client\Model\InlineObject78 | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesLangPut($id, $lang, $_rest_items_property_groups_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_property_groups_id_names_lang** | [**\OpenAPI\Client\Model\InlineObject78**](../Model/InlineObject78.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdNamesPost

> \OpenAPI\Client\Model\PropertyGroupName restItemsPropertyGroupsIdNamesPost($id, $_rest_items_property_groups_id_names)

Create a property group name

Creates a property group name. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_property_groups_id_names = new \OpenAPI\Client\Model\InlineObject77(); // \OpenAPI\Client\Model\InlineObject77 | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesPost($id, $_rest_items_property_groups_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_property_groups_id_names** | [**\OpenAPI\Client\Model\InlineObject77**](../Model/InlineObject77.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsIdPut

> \OpenAPI\Client\Model\PropertyGroup restItemsPropertyGroupsIdPut($id, $_rest_items_property_groups_id)

Update a property group

Updates an existing property group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_property_groups_id = new \OpenAPI\Client\Model\InlineObject76(); // \OpenAPI\Client\Model\InlineObject76 | 

try {
    $result = $apiInstance->restItemsPropertyGroupsIdPut($id, $_rest_items_property_groups_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_property_groups_id** | [**\OpenAPI\Client\Model\InlineObject76**](../Model/InlineObject76.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPropertyGroupsPost

> \OpenAPI\Client\Model\PropertyGroup restItemsPropertyGroupsPost($_rest_items_property_groups)

Create a property group

Creates a property group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_property_groups = new \OpenAPI\Client\Model\InlineObject75(); // \OpenAPI\Client\Model\InlineObject75 | 

try {
    $result = $apiInstance->restItemsPropertyGroupsPost($_rest_items_property_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_property_groups** | [**\OpenAPI\Client\Model\InlineObject75**](../Model/InlineObject75.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsPut

> object restItemsPut($_rest_items)

Bulk update items

Updates up to 50 items. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items = new \OpenAPI\Client\Model\InlineObject50(); // \OpenAPI\Client\Model\InlineObject50 | 

try {
    $result = $apiInstance->restItemsPut($_rest_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items** | [**\OpenAPI\Client\Model\InlineObject50**](../Model/InlineObject50.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesGet

> \OpenAPI\Client\Model\InlineResponse20018 restItemsSalesPricesGet($updated_at)

List sales prices

Lists all sales prices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsSalesPricesGet($updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete

> object restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete($id, $account_type, $account_id)

Deactivate a referrer account

Deactivates a referrer account for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$account_type = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete($id, $account_type, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **account_type** | **int**|  |
 **account_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdAccountsGet

> \OpenAPI\Client\Model\SalesPriceAccount[] restItemsSalesPricesIdAccountsGet($id)

List referrer accounts

Lists all activated referrer accounts of a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdAccountsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceAccount[]**](../Model/SalesPriceAccount.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdAccountsPost

> \OpenAPI\Client\Model\SalesPriceAccount restItemsSalesPricesIdAccountsPost($id, $_rest_items_sales_prices_id_accounts)

Activate a referrer account

Activates a referrer account for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_accounts = new \OpenAPI\Client\Model\InlineObject81(); // \OpenAPI\Client\Model\InlineObject81 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdAccountsPost($id, $_rest_items_sales_prices_id_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdAccountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_accounts** | [**\OpenAPI\Client\Model\InlineObject81**](../Model/InlineObject81.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceAccount**](../Model/SalesPriceAccount.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCountriesCountryIdDelete

> object restItemsSalesPricesIdCountriesCountryIdDelete($id, $country_id)

Deactivate a country

Deactivates a country for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$country_id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCountriesCountryIdDelete($id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCountriesCountryIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **country_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCountriesGet

> \OpenAPI\Client\Model\SalesPriceCountry[] restItemsSalesPricesIdCountriesGet($id)

List countries by sales price

Lists active countries for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCountriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceCountry[]**](../Model/SalesPriceCountry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCountriesPost

> \OpenAPI\Client\Model\SalesPriceCountry restItemsSalesPricesIdCountriesPost($id, $_rest_items_sales_prices_id_countries)

Activate a country

Activates a country for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_countries = new \OpenAPI\Client\Model\InlineObject82(); // \OpenAPI\Client\Model\InlineObject82 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCountriesPost($id, $_rest_items_sales_prices_id_countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCountriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_countries** | [**\OpenAPI\Client\Model\InlineObject82**](../Model/InlineObject82.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceCountry**](../Model/SalesPriceCountry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCurrenciesCurrencyDelete

> object restItemsSalesPricesIdCurrenciesCurrencyDelete($id, $currency)

Deactivate a currency

Deactivate a currency for a sales price. The ID of the sales price and the ISO code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$currency = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCurrenciesCurrencyDelete($id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCurrenciesCurrencyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **currency** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCurrenciesGet

> \OpenAPI\Client\Model\SalesPriceCurrency[] restItemsSalesPricesIdCurrenciesGet($id)

List activated currencies

List all currencies activated for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCurrenciesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceCurrency[]**](../Model/SalesPriceCurrency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCurrenciesPost

> \OpenAPI\Client\Model\SalesPriceCurrency restItemsSalesPricesIdCurrenciesPost($id, $_rest_items_sales_prices_id_currencies)

Activate a currency

Activates a currency for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_currencies = new \OpenAPI\Client\Model\InlineObject83(); // \OpenAPI\Client\Model\InlineObject83 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCurrenciesPost($id, $_rest_items_sales_prices_id_currencies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCurrenciesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_currencies** | [**\OpenAPI\Client\Model\InlineObject83**](../Model/InlineObject83.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceCurrency**](../Model/SalesPriceCurrency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete

> object restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete($id, $customer_class_id)

Activate a customer class

Activates a customer class for a sales price. The ID of the sales price and the ID of the customer class must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$customer_class_id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete($id, $customer_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **customer_class_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCustomerClassesGet

> \OpenAPI\Client\Model\SalesPriceCustomerClass[] restItemsSalesPricesIdCustomerClassesGet($id)

List activated customer classes

Lists the activated customer classes for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCustomerClassesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCustomerClassesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceCustomerClass[]**](../Model/SalesPriceCustomerClass.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdCustomerClassesPost

> \OpenAPI\Client\Model\SalesPriceCustomerClass restItemsSalesPricesIdCustomerClassesPost($id, $_rest_items_sales_prices_id_customer_classes)

Activate a customer class

Activates a customer class for a sales price. The ID of the sales price and the ID of the customer class must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_customer_classes = new \OpenAPI\Client\Model\InlineObject84(); // \OpenAPI\Client\Model\InlineObject84 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdCustomerClassesPost($id, $_rest_items_sales_prices_id_customer_classes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCustomerClassesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_customer_classes** | [**\OpenAPI\Client\Model\InlineObject84**](../Model/InlineObject84.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceCustomerClass**](../Model/SalesPriceCustomerClass.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdDelete

> object restItemsSalesPricesIdDelete($id)

Delete a sales price

Deletes a sales price. The ID of the sales price must be specified.  Delete salesPrice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdGet

> \OpenAPI\Client\Model\SalesPrice restItemsSalesPricesIdGet($id)

Get a sales price

Gets the data for a specific sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPrice**](../Model/SalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdNamesGet

> \OpenAPI\Client\Model\SalesPriceName[] restItemsSalesPricesIdNamesGet($id)

List names of a sales price

Lists the names of a sales price in all languages. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceName[]**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdNamesLangDelete

> object restItemsSalesPricesIdNamesLangDelete($id, $lang)

Delete a sales price name

Deletes the name of a sales price in the specified language. The ID of the sales price and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesLangDelete($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdNamesLangGet

> \OpenAPI\Client\Model\SalesPriceName restItemsSalesPricesIdNamesLangGet($id, $lang)

Gets a sales price name

Gets the sales price name of a sales price in the specified langauge. The ID of the sales price and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceName**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdNamesLangPut

> \OpenAPI\Client\Model\SalesPriceName restItemsSalesPricesIdNamesLangPut($id, $lang, $_rest_items_sales_prices_id_names_lang)

Update a sales price name

Updates a sales price name in the specified language. The ID of the sales price and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 
$_rest_items_sales_prices_id_names_lang = new \OpenAPI\Client\Model\InlineObject86(); // \OpenAPI\Client\Model\InlineObject86 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesLangPut($id, $lang, $_rest_items_sales_prices_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |
 **_rest_items_sales_prices_id_names_lang** | [**\OpenAPI\Client\Model\InlineObject86**](../Model/InlineObject86.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceName**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdNamesPost

> \OpenAPI\Client\Model\SalesPriceName restItemsSalesPricesIdNamesPost($id, $_rest_items_sales_prices_id_names)

Create a sales price name

Creates a name for a sales price in the specified language. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_names = new \OpenAPI\Client\Model\InlineObject85(); // \OpenAPI\Client\Model\InlineObject85 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesPost($id, $_rest_items_sales_prices_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_names** | [**\OpenAPI\Client\Model\InlineObject85**](../Model/InlineObject85.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceName**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdOnlineStoresGet

> \OpenAPI\Client\Model\SalesPriceOnlineStore[] restItemsSalesPricesIdOnlineStoresGet($id)

List activated clients (stores)

Lists all activated clients (stores) for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdOnlineStoresGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdOnlineStoresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceOnlineStore[]**](../Model/SalesPriceOnlineStore.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdOnlineStoresPost

> \OpenAPI\Client\Model\SalesPriceOnlineStore restItemsSalesPricesIdOnlineStoresPost($id, $_rest_items_sales_prices_id_online_stores)

Activate a client (store)

Activates a client (store) for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_online_stores = new \OpenAPI\Client\Model\InlineObject87(); // \OpenAPI\Client\Model\InlineObject87 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdOnlineStoresPost($id, $_rest_items_sales_prices_id_online_stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdOnlineStoresPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_online_stores** | [**\OpenAPI\Client\Model\InlineObject87**](../Model/InlineObject87.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceOnlineStore**](../Model/SalesPriceOnlineStore.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdOnlineStoresWebstoreIdDelete

> object restItemsSalesPricesIdOnlineStoresWebstoreIdDelete($id, $webstore_id)

Deactivate a client (store)

Deactivates a client (store) for a sales price. The ID of the sales price and the ID of the client (store) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$webstore_id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdOnlineStoresWebstoreIdDelete($id, $webstore_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdOnlineStoresWebstoreIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **webstore_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdPut

> \OpenAPI\Client\Model\SalesPrice restItemsSalesPricesIdPut($id, $_rest_items_sales_prices_id)

Update a sales price

Updates a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id = new \OpenAPI\Client\Model\InlineObject80(); // \OpenAPI\Client\Model\InlineObject80 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdPut($id, $_rest_items_sales_prices_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id** | [**\OpenAPI\Client\Model\InlineObject80**](../Model/InlineObject80.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPrice**](../Model/SalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdReferrersGet

> \OpenAPI\Client\Model\SalesPriceReferrer[] restItemsSalesPricesIdReferrersGet($id)

List activated referrers

Lists all activated referrers for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdReferrersGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdReferrersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\SalesPriceReferrer[]**](../Model/SalesPriceReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdReferrersPost

> \OpenAPI\Client\Model\SalesPriceReferrer restItemsSalesPricesIdReferrersPost($id, $_rest_items_sales_prices_id_referrers)

Activate a referrer

Activates a referrer for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_sales_prices_id_referrers = new \OpenAPI\Client\Model\InlineObject88(); // \OpenAPI\Client\Model\InlineObject88 | 

try {
    $result = $apiInstance->restItemsSalesPricesIdReferrersPost($id, $_rest_items_sales_prices_id_referrers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdReferrersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_sales_prices_id_referrers** | [**\OpenAPI\Client\Model\InlineObject88**](../Model/InlineObject88.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPriceReferrer**](../Model/SalesPriceReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesIdReferrersReferrerIdDelete

> object restItemsSalesPricesIdReferrersReferrerIdDelete($id, $referrer_id)

Deactivates a referrer

Deactivates a referrer for a sales price. The ID of the sales price and the ID of the referrer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$referrer_id = 56; // int | 

try {
    $result = $apiInstance->restItemsSalesPricesIdReferrersReferrerIdDelete($id, $referrer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdReferrersReferrerIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **referrer_id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsSalesPricesPost

> \OpenAPI\Client\Model\SalesPrice restItemsSalesPricesPost($_rest_items_sales_prices)

Create a sales price

Creates a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_sales_prices = new \OpenAPI\Client\Model\InlineObject79(); // \OpenAPI\Client\Model\InlineObject79 | 

try {
    $result = $apiInstance->restItemsSalesPricesPost($_rest_items_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_sales_prices** | [**\OpenAPI\Client\Model\InlineObject79**](../Model/InlineObject79.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SalesPrice**](../Model/SalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsGet

> \OpenAPI\Client\Model\InlineResponse20019 restItemsUnitsGet($updated_at)

List units

Lists all units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsUnitsGet($updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdDelete

> object restItemsUnitsIdDelete($id)

Delete a unit

Deletes a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdGet

> \OpenAPI\Client\Model\Unit restItemsUnitsIdGet($id)

Get a unit

Gets a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdNamesGet

> \OpenAPI\Client\Model\UnitName[] restItemsUnitsIdNamesGet($id)

List unit names

Lists the unit names of a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\UnitName[]**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdNamesLangDelete

> object restItemsUnitsIdNamesLangDelete($id, $lang)

Delete a unit name

Deletes a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdNamesLangDelete($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdNamesLangGet

> \OpenAPI\Client\Model\UnitName restItemsUnitsIdNamesLangGet($id, $lang)

Get a unit name

Gets a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\UnitName**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdNamesLangPut

> \OpenAPI\Client\Model\UnitName restItemsUnitsIdNamesLangPut($id, $lang)

Update a unit name

Updates a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$lang = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdNamesLangPut($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **lang** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\UnitName**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdNamesPost

> \OpenAPI\Client\Model\UnitName restItemsUnitsIdNamesPost($id)

Create a unit name

Creates a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->restItemsUnitsIdNamesPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\UnitName**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsIdPut

> \OpenAPI\Client\Model\Unit restItemsUnitsIdPut($id, $_rest_items_units_id)

Update a unit

Updates a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$_rest_items_units_id = new \OpenAPI\Client\Model\InlineObject90(); // \OpenAPI\Client\Model\InlineObject90 | 

try {
    $result = $apiInstance->restItemsUnitsIdPut($id, $_rest_items_units_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **_rest_items_units_id** | [**\OpenAPI\Client\Model\InlineObject90**](../Model/InlineObject90.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsUnitsPost

> \OpenAPI\Client\Model\Unit restItemsUnitsPost($_rest_items_units)

Create a unit

Creates a unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_units = new \OpenAPI\Client\Model\InlineObject89(); // \OpenAPI\Client\Model\InlineObject89 | 

try {
    $result = $apiInstance->restItemsUnitsPost($_rest_items_units);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_units** | [**\OpenAPI\Client\Model\InlineObject89**](../Model/InlineObject89.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsGet

> \OpenAPI\Client\Model\InlineResponse20020 restItemsVariationsGet($with, $lang, $page, $items_per_page, $id, $item_id, $variation_tag_id, $item_name, $flag_one, $flag_two, $store_special, $category_id, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $plenty_id, $referrer_id, $supplier_number, $sku, $manufacturer_id, $updated_between, $created_between, $related_updated_between, $item_description, $stock_warehouse_id, $supplier_id)

Search variations

Search variations by different filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
$id = 56; // int | Filter restricts the list of results to variations with the specified variation ID. An variation ID must be specified. More than one ID should be separated by commas.
$item_id = 56; // int | Filter restricts the list of results to variations with the specified item ID. An item ID must be specified. More than one ID should be separated by commas.
$variation_tag_id = 56; // int | Filter restricts the list of results to variations with the specified tag ID. An tag ID must be specified. More than one ID should be separated by commas.
$item_name = 'item_name_example'; // string | Filter restricts the list of results to variations with the specified item name. An item name must be specified.
$flag_one = 'flag_one_example'; // string | Filter restricts the list of results to variations of items with the flag one. The flag one must be specified.
$flag_two = 'flag_two_example'; // string | Filter restricts the list of results to variations of items with the flag two. The flag two must be specified.
$store_special = 56; // int | Filter restricts the list of results to variations of items with the specified store special. The following values are allowed: 0 (None), 1 (Special offer), 2 (New item), 3(Top item).
$category_id = 56; // int | Filter restricts the list of results to variations with the specified category id
$is_main = True; // bool | Filter restricts the list of results to variations that are main variations.
$is_active = True; // bool | Filter restricts the list of results to variations that are active.
$barcode = 'barcode_example'; // string | Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
$number_exact = 'number_exact_example'; // string | Filter restricts the list of results to the variation with the variation number specified.
$number_fuzzy = 'number_fuzzy_example'; // string | Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
$is_bundle = True; // bool | Filter restricts the list of results to variations to which variations were added to create a bundle.
$plenty_id = 56; // int | Filter restricts the list of results to variations that are visible in specified clients. Separate more than one client by commas.
$referrer_id = 56; // int | Filter restricts the list of results to variations that are visible in specified markets. Separate more than one referrer by commas.
$supplier_number = 'supplier_number_example'; // string | Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
$sku = 'sku_example'; // string | Filter restricts the list of results to variations with the specified SKU. In additional, results can also be restricted to a specific referrer by specifying the referrer ID after a colon. Example: L0R3MIP5UM:104.1
$manufacturer_id = 56; // int | Filter restricts the list of results to variations with the specified manufacturer ID.
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
$created_between = 'created_between_example'; // string | Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
$related_updated_between = 'related_updated_between_example'; // string | Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
$item_description = 'item_description_example'; // string | Filter restricts the list of results to variations with descriptions that contain the specified string.
$stock_warehouse_id = 'stock_warehouse_id_example'; // string | Filter restricts the list of results to variations which have physical stock on the given warehouse.
$supplier_id = 56; // int | Filter restricts the list of results to variations with the specified supplier ID.

try {
    $result = $apiInstance->restItemsVariationsGet($with, $lang, $page, $items_per_page, $id, $item_id, $variation_tag_id, $item_name, $flag_one, $flag_two, $store_special, $category_id, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $plenty_id, $referrer_id, $supplier_number, $sku, $manufacturer_id, $updated_between, $created_between, $related_updated_between, $item_description, $stock_warehouse_id, $supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| Includes the specified variation information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationProperties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationBarcodes&lt;/b&gt; &#x3D; The barcode linked to the variation and the saved code&lt;/li&gt;&lt;li&gt;variationBundleComponents&lt;/b&gt; &#x3D; The bundle components of the variation and their quantities&lt;/li&gt;&lt;li&gt;variationComponentBundles&lt;/b&gt; &#x3D; The bundles that this variation is a component of&lt;/li&gt;&lt;li&gt;variationSalesPrices&lt;/b&gt; &#x3D; The sales prices linked to the variation and the saved price&lt;/li&gt;&lt;li&gt;marketItemNumbers&lt;/b&gt; &#x3D; The market ident number of the variation&lt;/li&gt;&lt;li&gt;variationCategories&lt;/b&gt; &#x3D; The categories linked to the variation&lt;/li&gt;&lt;li&gt;variationClients&lt;/b&gt; &#x3D; The clients (stores) for which the variation is activated&lt;/li&gt;&lt;li&gt;variationMarkets&lt;/b&gt; &#x3D; The markets for which the variation is activated &lt;/li&gt;&lt;li&gt;variationDefaultCategory&lt;/b&gt; &#x3D; The default category of the variation&lt;/li&gt;&lt;li&gt;variationSuppliers&lt;/b&gt; &#x3D; The supplier data associated with the variation&lt;/li&gt;&lt;li&gt;variationWarehouses&lt;/b&gt; &#x3D; The warehouse data associated with the variation&lt;/li&gt;&lt;li&gt;images&lt;/b&gt; &#x3D; The images linked to the variation&lt;/li&gt;&lt;li&gt;itemImages&lt;/b&gt; &#x3D; The images linked to the item&lt;/li&gt;&lt;li&gt;variationAttributeValues&lt;/b&gt; &#x3D; The attribute values of the variation&lt;/li&gt;&lt;li&gt;variationSkus&lt;/b&gt; &#x3D; The SKU data associated with the variation&lt;/li&gt;&lt;li&gt;variationAdditionalSkus&lt;/b&gt; &#x3D; The additional SKU data associated with the variation&lt;/li&gt;&lt;li&gt;unit&lt;/b&gt; &#x3D; The unit assigned to the variation&lt;/li&gt;&lt;li&gt;parent&lt;/b&gt; &#x3D; The main variation of the variation. Value is null if this variation is the item&#39;s main variation.&lt;/li&gt;&lt;li&gt;item&lt;/b&gt; &#x3D; The item of the variation&lt;/li&gt;&lt;li&gt;stock&lt;/b&gt; &#x3D; The stock data of the variation&lt;/li&gt;&lt;/ul&gt; For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas. | [optional]
 **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional]
 **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional]
 **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. | [optional]
 **id** | **int**| Filter restricts the list of results to variations with the specified variation ID. An variation ID must be specified. More than one ID should be separated by commas. | [optional]
 **item_id** | **int**| Filter restricts the list of results to variations with the specified item ID. An item ID must be specified. More than one ID should be separated by commas. | [optional]
 **variation_tag_id** | **int**| Filter restricts the list of results to variations with the specified tag ID. An tag ID must be specified. More than one ID should be separated by commas. | [optional]
 **item_name** | **string**| Filter restricts the list of results to variations with the specified item name. An item name must be specified. | [optional]
 **flag_one** | **string**| Filter restricts the list of results to variations of items with the flag one. The flag one must be specified. | [optional]
 **flag_two** | **string**| Filter restricts the list of results to variations of items with the flag two. The flag two must be specified. | [optional]
 **store_special** | **int**| Filter restricts the list of results to variations of items with the specified store special. The following values are allowed: 0 (None), 1 (Special offer), 2 (New item), 3(Top item). | [optional]
 **category_id** | **int**| Filter restricts the list of results to variations with the specified category id | [optional]
 **is_main** | **bool**| Filter restricts the list of results to variations that are main variations. | [optional]
 **is_active** | **bool**| Filter restricts the list of results to variations that are active. | [optional]
 **barcode** | **string**| Filter restricts the list of results to variations with the specified barcode. A barcode must be specified. | [optional]
 **number_exact** | **string**| Filter restricts the list of results to the variation with the variation number specified. | [optional]
 **number_fuzzy** | **string**| Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312. | [optional]
 **is_bundle** | **bool**| Filter restricts the list of results to variations to which variations were added to create a bundle. | [optional]
 **plenty_id** | **int**| Filter restricts the list of results to variations that are visible in specified clients. Separate more than one client by commas. | [optional]
 **referrer_id** | **int**| Filter restricts the list of results to variations that are visible in specified markets. Separate more than one referrer by commas. | [optional]
 **supplier_number** | **string**| Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified. | [optional]
 **sku** | **string**| Filter restricts the list of results to variations with the specified SKU. In additional, results can also be restricted to a specific referrer by specifying the referrer ID after a colon. Example: L0R3MIP5UM:104.1 | [optional]
 **manufacturer_id** | **int**| Filter restricts the list of results to variations with the specified manufacturer ID. | [optional]
 **updated_between** | **string**| Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween&#x3D;1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween&#x3D;1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported. | [optional]
 **created_between** | **string**| Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween&#x3D;1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween&#x3D;1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported. | [optional]
 **related_updated_between** | **string**| Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats. | [optional]
 **item_description** | **string**| Filter restricts the list of results to variations with descriptions that contain the specified string. | [optional]
 **stock_warehouse_id** | **string**| Filter restricts the list of results to variations which have physical stock on the given warehouse. | [optional]
 **supplier_id** | **int**| Filter restricts the list of results to variations with the specified supplier ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsPut

> object restItemsVariationsPut($_rest_items_variations)

Update up to 50 variations

Updates up to 50 variations. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations = new \OpenAPI\Client\Model\InlineObject91(); // \OpenAPI\Client\Model\InlineObject91 | 

try {
    $result = $apiInstance->restItemsVariationsPut($_rest_items_variations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations** | [**\OpenAPI\Client\Model\InlineObject91**](../Model/InlineObject91.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationCategoriesPost

> object restItemsVariationsVariationCategoriesPost($_rest_items_variations_variation_categories)

Bulk create category links

Creates up to 50 links between variations and categories. The ID of the variations and the ID of the categories must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_categories = new \OpenAPI\Client\Model\InlineObject93(); // \OpenAPI\Client\Model\InlineObject93 | 

try {
    $result = $apiInstance->restItemsVariationsVariationCategoriesPost($_rest_items_variations_variation_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_categories** | [**\OpenAPI\Client\Model\InlineObject93**](../Model/InlineObject93.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationCategoriesPut

> object restItemsVariationsVariationCategoriesPut($_rest_items_variations_variation_categories)

Bulk update category links

Updates up to 50 links between variations and categories. The ID of the variations and the ID of the categories must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_categories = new \OpenAPI\Client\Model\InlineObject92(); // \OpenAPI\Client\Model\InlineObject92 | 

try {
    $result = $apiInstance->restItemsVariationsVariationCategoriesPut($_rest_items_variations_variation_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationCategoriesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_categories** | [**\OpenAPI\Client\Model\InlineObject92**](../Model/InlineObject92.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationMarketsGet

> \OpenAPI\Client\Model\InlineResponse20021 restItemsVariationsVariationMarketsGet()

List all links between variations and markets

Lists all links between variations and markets. Results can be filtered by the ID of the variation and by the ID of the market, e.g. \"variationId=1030\" lists all links of the variation with the ID 1030.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsVariationsVariationMarketsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationMarketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationMarketsPost

> object restItemsVariationsVariationMarketsPost($_rest_items_variations_variation_markets)

Create up to 50 links between variations and markets

Creates up to 50 links between variations and markets. The ID of the variation and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_markets = new \OpenAPI\Client\Model\InlineObject94(); // \OpenAPI\Client\Model\InlineObject94 | 

try {
    $result = $apiInstance->restItemsVariationsVariationMarketsPost($_rest_items_variations_variation_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationMarketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_markets** | [**\OpenAPI\Client\Model\InlineObject94**](../Model/InlineObject94.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationPropertiesPost

> object restItemsVariationsVariationPropertiesPost($_rest_items_variations_variation_properties)

Bulk update properties

Creates up to 50 properties of variations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_properties = new \OpenAPI\Client\Model\InlineObject96(); // \OpenAPI\Client\Model\InlineObject96 | 

try {
    $result = $apiInstance->restItemsVariationsVariationPropertiesPost($_rest_items_variations_variation_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_properties** | [**\OpenAPI\Client\Model\InlineObject96**](../Model/InlineObject96.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationPropertiesPut

> object restItemsVariationsVariationPropertiesPut($_rest_items_variations_variation_properties)

Bulk update properties

Updates up to 50 properties of variations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_properties = new \OpenAPI\Client\Model\InlineObject95(); // \OpenAPI\Client\Model\InlineObject95 | 

try {
    $result = $apiInstance->restItemsVariationsVariationPropertiesPut($_rest_items_variations_variation_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationPropertiesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_properties** | [**\OpenAPI\Client\Model\InlineObject95**](../Model/InlineObject95.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationSalesPricesGet

> \OpenAPI\Client\Model\InlineResponse2005 restItemsVariationsVariationSalesPricesGet($variation_id, $sales_price_id, $updated_at)

Get all sales price relations

Gets all links between variations and sales prices including sales price data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variation_id = 56; // int | Filter that restricts the search result to the sales price data of a specific variation.
$sales_price_id = 56; // int | Filter that restricts the search result to the sales price data of variations linked to a specific sales price.
$updated_at = 'updated_at_example'; // string | Filter that restricts the search result to links between variations and sales prices updated after a specific point in time.

try {
    $result = $apiInstance->restItemsVariationsVariationSalesPricesGet($variation_id, $sales_price_id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationSalesPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variation_id** | **int**| Filter that restricts the search result to the sales price data of a specific variation. | [optional]
 **sales_price_id** | **int**| Filter that restricts the search result to the sales price data of variations linked to a specific sales price. | [optional]
 **updated_at** | **string**| Filter that restricts the search result to links between variations and sales prices updated after a specific point in time. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationSalesPricesPost

> object restItemsVariationsVariationSalesPricesPost($_rest_items_variations_variation_sales_prices)

Bulk create prices

Creates up to 50 prices of variations. The ID of the variation, the ID of the sales price and a price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_sales_prices = new \OpenAPI\Client\Model\InlineObject98(); // \OpenAPI\Client\Model\InlineObject98 | 

try {
    $result = $apiInstance->restItemsVariationsVariationSalesPricesPost($_rest_items_variations_variation_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_sales_prices** | [**\OpenAPI\Client\Model\InlineObject98**](../Model/InlineObject98.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restItemsVariationsVariationSalesPricesPut

> object restItemsVariationsVariationSalesPricesPut($_rest_items_variations_variation_sales_prices)

Bulk update prices

Updates up to 50 prices of variations. The ID of the variation, the ID of the sales price and a price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_sales_prices = new \OpenAPI\Client\Model\InlineObject97(); // \OpenAPI\Client\Model\InlineObject97 | 

try {
    $result = $apiInstance->restItemsVariationsVariationSalesPricesPut($_rest_items_variations_variation_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationSalesPricesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_rest_items_variations_variation_sales_prices** | [**\OpenAPI\Client\Model\InlineObject97**](../Model/InlineObject97.md)|  | [optional]

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

