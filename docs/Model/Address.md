# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the address | [optional] 
**gender** | **string** | The gender (\&quot;female\&quot;, \&quot;male\&quot; or \&quot;diverse\&quot;) | [optional] 
**name1** | **string** | The name 1 field (defaults to: company name) | [optional] 
**name2** | **string** | The name 2 field (defaults to: first name) | [optional] 
**name3** | **string** | The name 3 field (defaults to: last name) | [optional] 
**name4** | **string** | The name 4 field (defaults to: c/o) | [optional] 
**address1** | **string** | The address 1 field (defaults to: street|&#39;PACKSTATION&#39;|&#39;POSTFILIALE&#39;) | [optional] 
**address2** | **string** | The address 2 field (defaults to: houseNumber|packstationNo) | [optional] 
**address3** | **string** | The address 3 field (defaults to: additional) | [optional] 
**address4** | **string** | The address 4 field is currently undefined and can be freely used. | [optional] 
**postal_code** | **string** | The postcode | [optional] 
**town** | **string** | The town | [optional] 
**country_id** | **int** | The ID of the country | [optional] 
**state_id** | **int** | The ID of the state | [optional] 
**read_only** | **bool** | Flag that indicates if the data record is read only | [optional] 
**company_name** | **string** | The company name (alias for name1, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**first_name** | **string** | The first name (alias for name2, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**last_name** | **string** | The last name (alias for name3, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**care_of** | **string** | The c/o (alias for name4, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**street** | **string** | The street (alias for address1, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**house_number** | **string** | The house number (alias for address2, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**additional** | **string** | The additional address information (alias for address3, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**checked_at** | **string** | The time the address was checked as unix timestamp | [optional] 
**created_at** | **string** | The time the address was created as unix timestamp | [optional] 
**updated_at** | **string** | The time the address was last updated as unix timestamp | [optional] 
**tax_id_number** | **string** | The taxIdNumber option (alias for option with typeId 1, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**external_id** | **string** | The externalId option (alias for option with typeId 2, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**entry_certificate** | **bool** | The entryCertificate option (alias for option with typeId 3, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**phone** | **string** | The phone option (alias for option with typeId 4, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**email** | **string** | The email option (alias for option with typeId 5, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**postident** | **string** | The PostIdent option (alias for option with typeId 6, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**personal_number** | **string** | The personal number option (alias for option with typeId 7, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**fsk** | **string** | The age rating option (alias for option with typeId 8, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**birthday** | **string** | The birthday option (alias for option with typeId 9, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**title** | **string** | The title option (alias for option with typeId 11, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**session_id** | **string** | The fronetnd session ID that was used when the address was created (alias for option with typeId 10, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**contact_person** | **string** | The contact person option (alias for option with typeId 12, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**packstation_no** | **string** | The packstation number (alias for houseNumber and address2, &lt;i&gt;read only&lt;/i&gt;) | [optional] 
**is_packstation** | **bool** | Flag that indicates if the address is a packstation | [optional] 
**is_postfiliale** | **bool** | Flag that indicates if the address is a postfiliale (post office) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


