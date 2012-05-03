<?php
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'windowsazure\\core\\authentication\\sharedkeyauthscheme' => '/WindowsAzure/Core/Authentication/SharedKeyAuthScheme.php',
            'windowsazure\\core\\authentication\\storageauthscheme' => '/WindowsAzure/Core/Authentication/StorageAuthScheme.php',
            'windowsazure\\core\\authentication\\tablesharedkeyliteauthscheme' => '/WindowsAzure/Core/Authentication/TableSharedKeyLiteAuthScheme.php',
            'windowsazure\\core\\configuration' => '/WindowsAzure/Core/Configuration.php',
            'windowsazure\\core\\filterableservice' => '/WindowsAzure/Core/FilterableService.php',
            'windowsazure\\core\\filters\\datefilter' => '/WindowsAzure/Core/Filters/DateFilter.php',
            'windowsazure\\core\\filters\\exponentialretrypolicy' => '/WindowsAzure/Core/Filters/ExponentialRetryPolicy.php',
            'windowsazure\\core\\filters\\headersfilter' => '/WindowsAzure/Core/Filters/HeadersFilter.php',
            'windowsazure\\core\\filters\\retrypolicy' => '/WindowsAzure/Core/Filters/RetryPolicy.php',
            'windowsazure\\core\\filters\\retrypolicyfilter' => '/WindowsAzure/Core/Filters/RetryPolicyFilter.php',
            'windowsazure\\core\\filters\\sharedkeyfilter' => '/WindowsAzure/Core/Filters/SharedKeyFilter.php',
            'windowsazure\\core\\http\\httpcallcontext' => '/WindowsAzure/Core/Http/HttpCallContext.php',
            'windowsazure\\core\\http\\httpclient' => '/WindowsAzure/Core/Http/HttpClient.php',
            'windowsazure\\core\\http\\ihttpclient' => '/WindowsAzure/Core/Http/IHttpClient.php',
            'windowsazure\\core\\http\\iurl' => '/WindowsAzure/Core/Http/IUrl.php',
            'windowsazure\\core\\http\\url' => '/WindowsAzure/Core/Http/Url.php',
            'windowsazure\\core\\invalidargumenttypeexception' => '/WindowsAzure/Core/InvalidArgumentTypeException.php',
            'windowsazure\\core\\iservicebuilder' => '/WindowsAzure/Core/IServiceBuilder.php',
            'windowsazure\\core\\iservicefilter' => '/WindowsAzure/Core/IServiceFilter.php',
            'windowsazure\\core\\restproxy' => '/WindowsAzure/Core/RestProxy.php',
            'windowsazure\\core\\serialization\\iserializer' => '/WindowsAzure/Core/Serialization/ISerializer.php',
            'windowsazure\\core\\serialization\\xmlserializer' => '/WindowsAzure/Core/Serialization/XmlSerializer.php',
            'windowsazure\\core\\serviceexception' => '/WindowsAzure/Core/ServiceException.php',
            'windowsazure\\core\\servicesbuilder' => '/WindowsAzure/Core/ServicesBuilder.php',
            'windowsazure\\core\\windowsazureutilities' => '/WindowsAzure/Core/WindowsAzureUtilities.php',
            'windowsazure\\logger' => '/WindowsAzure/Logger.php',
            'windowsazure\\resources' => '/WindowsAzure/Resources.php',
            'windowsazure\\servicemanagement\\iservicemanagement' => '/WindowsAzure/ServiceManagement/IServiceManagement.php',
            'windowsazure\\servicemanagement\\models\\affinitygroup' => '/WindowsAzure/ServiceManagement/Models/AffinityGroup.php',
            'windowsazure\\servicemanagement\\models\\asynchronousoperationresult' => '/WindowsAzure/ServiceManagement/Models/AsynchronousOperationResult.php',
            'windowsazure\\servicemanagement\\models\\createaffinitygroupoptions' => '/WindowsAzure/ServiceManagement/Models/CreateAffinityGroupOptions.php',
            'windowsazure\\servicemanagement\\models\\createstorageserviceoptions' => '/WindowsAzure/ServiceManagement/Models/CreateStorageServiceOptions.php',
            'windowsazure\\servicemanagement\\models\\getaffinitygrouppropertiesresult' => '/WindowsAzure/ServiceManagement/Models/GetAffinityGroupPropertiesResult.php',
            'windowsazure\\servicemanagement\\models\\getoperationstatusresult' => '/WindowsAzure/ServiceManagement/Models/GetOperationStatusResult.php',
            'windowsazure\\servicemanagement\\models\\getstorageservicekeysresult' => '/WindowsAzure/ServiceManagement/Models/GetStorageServiceKeysResult.php',
            'windowsazure\\servicemanagement\\models\\getstorageservicepropertiesresult' => '/WindowsAzure/ServiceManagement/Models/GetStorageServicePropertiesResult.php',
            'windowsazure\\servicemanagement\\models\\keytype' => '/WindowsAzure/ServiceManagement/Models/KeyType.php',
            'windowsazure\\servicemanagement\\models\\listaffinitygroupsresult' => '/WindowsAzure/ServiceManagement/Models/ListAffinityGroupsResult.php',
            'windowsazure\\servicemanagement\\models\\listlocationsresult' => '/WindowsAzure/ServiceManagement/Models/ListLocationsResult.php',
            'windowsazure\\servicemanagement\\models\\liststorageservicesresult' => '/WindowsAzure/ServiceManagement/Models/ListStorageServicesResult.php',
            'windowsazure\\servicemanagement\\models\\location' => '/WindowsAzure/ServiceManagement/Models/Location.php',
            'windowsazure\\servicemanagement\\models\\locations' => '/WindowsAzure/ServiceManagement/Models/Locations.php',
            'windowsazure\\servicemanagement\\models\\operationstatus' => '/WindowsAzure/ServiceManagement/Models/OperationStatus.php',
            'windowsazure\\servicemanagement\\models\\service' => '/WindowsAzure/ServiceManagement/Models/Service.php',
            'windowsazure\\servicemanagement\\models\\serviceproperties' => '/WindowsAzure/ServiceManagement/Models/ServiceProperties.php',
            'windowsazure\\servicemanagement\\models\\storageservice' => '/WindowsAzure/ServiceManagement/Models/StorageService.php',
            'windowsazure\\servicemanagement\\models\\updatestorageserviceoptions' => '/WindowsAzure/ServiceManagement/Models/UpdateStorageServiceOptions.php',
            'windowsazure\\servicemanagement\\servicemanagementrestproxy' => '/WindowsAzure/ServiceManagement/ServiceManagementRestProxy.php',
            'windowsazure\\servicemanagement\\servicemanagementservice' => '/WindowsAzure/ServiceManagement/ServiceManagementService.php',
            'windowsazure\\servicemanagement\\servicemanagementsettings' => '/WindowsAzure/ServiceManagement/ServiceManagementSettings.php',
            'windowsazure\\serviceruntime\\acquirecurrentstate' => '/WindowsAzure/ServiceRuntime/AcquireCurrentState.php',
            'windowsazure\\serviceruntime\\channelnotavailableexception' => '/WindowsAzure/ServiceRuntime/ChannelNotAvailableException.php',
            'windowsazure\\serviceruntime\\chunkedgoalstatedeserializer' => '/WindowsAzure/ServiceRuntime/ChunkedGoalStateDeserializer.php',
            'windowsazure\\serviceruntime\\currentstate' => '/WindowsAzure/ServiceRuntime/CurrentState.php',
            'windowsazure\\serviceruntime\\currentstatus' => '/WindowsAzure/ServiceRuntime/CurrentStatus.php',
            'windowsazure\\serviceruntime\\fileinputchannel' => '/WindowsAzure/ServiceRuntime/FileInputChannel.php',
            'windowsazure\\serviceruntime\\fileoutputchannel' => '/WindowsAzure/ServiceRuntime/FileOutputChannel.php',
            'windowsazure\\serviceruntime\\goalstate' => '/WindowsAzure/ServiceRuntime/GoalState.php',
            'windowsazure\\serviceruntime\\icurrentstateserializer' => '/WindowsAzure/ServiceRuntime/ICurrentStateSerializer.php',
            'windowsazure\\serviceruntime\\igoalstatedeserializer' => '/WindowsAzure/ServiceRuntime/IGoalStateDeserializer.php',
            'windowsazure\\serviceruntime\\iinputchannel' => '/WindowsAzure/ServiceRuntime/IInputChannel.php',
            'windowsazure\\serviceruntime\\ioutputchannel' => '/WindowsAzure/ServiceRuntime/IOutputChannel.php',
            'windowsazure\\serviceruntime\\iroleenvironmentchange' => '/WindowsAzure/ServiceRuntime/IRoleEnvironmentChange.php',
            'windowsazure\\serviceruntime\\iroleenvironmentdatadeserializer' => '/WindowsAzure/ServiceRuntime/IRoleEnvironmentDataDeserializer.php',
            'windowsazure\\serviceruntime\\iruntimeclient' => '/WindowsAzure/ServiceRuntime/IRuntimeClient.php',
            'windowsazure\\serviceruntime\\iruntimeclientfactory' => '/WindowsAzure/ServiceRuntime/IRuntimeClientFactory.php',
            'windowsazure\\serviceruntime\\iruntimecurrentstateclient' => '/WindowsAzure/ServiceRuntime/IRuntimeCurrentStateClient.php',
            'windowsazure\\serviceruntime\\iruntimegoalstateclient' => '/WindowsAzure/ServiceRuntime/IRuntimeGoalStateClient.php',
            'windowsazure\\serviceruntime\\localresource' => '/WindowsAzure/ServiceRuntime/LocalResource.php',
            'windowsazure\\serviceruntime\\protocol1runtimeclient' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeClient.php',
            'windowsazure\\serviceruntime\\protocol1runtimeclientfactory' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeClientFactory.php',
            'windowsazure\\serviceruntime\\protocol1runtimecurrentstateclient' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeCurrentStateClient.php',
            'windowsazure\\serviceruntime\\protocol1runtimegoalstateclient' => '/WindowsAzure/ServiceRuntime/Protocol1RuntimeGoalStateClient.php',
            'windowsazure\\serviceruntime\\releasecurrentstate' => '/WindowsAzure/ServiceRuntime/ReleaseCurrentState.php',
            'windowsazure\\serviceruntime\\role' => '/WindowsAzure/ServiceRuntime/Role.php',
            'windowsazure\\serviceruntime\\roleenvironment' => '/WindowsAzure/ServiceRuntime/RoleEnvironment.php',
            'windowsazure\\serviceruntime\\roleenvironmentconfigurationsettingchange' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentConfigurationSettingChange.php',
            'windowsazure\\serviceruntime\\roleenvironmentdata' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentData.php',
            'windowsazure\\serviceruntime\\roleenvironmentnotavailableexception' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentNotAvailableException.php',
            'windowsazure\\serviceruntime\\roleenvironmenttopologychange' => '/WindowsAzure/ServiceRuntime/RoleEnvironmentTopologyChange.php',
            'windowsazure\\serviceruntime\\roleinstance' => '/WindowsAzure/ServiceRuntime/RoleInstance.php',
            'windowsazure\\serviceruntime\\roleinstanceendpoint' => '/WindowsAzure/ServiceRuntime/RoleInstanceEndpoint.php',
            'windowsazure\\serviceruntime\\roleinstancestatus' => '/WindowsAzure/ServiceRuntime/RoleInstanceStatus.php',
            'windowsazure\\serviceruntime\\runtimekernel' => '/WindowsAzure/ServiceRuntime/RuntimeKernel.php',
            'windowsazure\\serviceruntime\\runtimeversionmanager' => '/WindowsAzure/ServiceRuntime/RuntimeVersionManager.php',
            'windowsazure\\serviceruntime\\runtimeversionprotocolclient' => '/WindowsAzure/ServiceRuntime/RuntimeVersionProtocolClient.php',
            'windowsazure\\serviceruntime\\xmlcurrentstateserializer' => '/WindowsAzure/ServiceRuntime/XmlCurrentStateSerializer.php',
            'windowsazure\\serviceruntime\\xmlgoalstatedeserializer' => '/WindowsAzure/ServiceRuntime/XmlGoalStateDeserializer.php',
            'windowsazure\\serviceruntime\\xmlroleenvironmentdatadeserializer' => '/WindowsAzure/ServiceRuntime/XmlRoleEnvironmentDataDeserializer.php',
            'windowsazure\\services\\blob\\blobrestproxy' => '/WindowsAzure/Services/Blob/BlobRestProxy.php',
            'windowsazure\\services\\blob\\blobservice' => '/WindowsAzure/Services/Blob/BlobService.php',
            'windowsazure\\services\\blob\\blobsettings' => '/WindowsAzure/Services/Blob/BlobSettings.php',
            'windowsazure\\services\\blob\\iblob' => '/WindowsAzure/Services/Blob/IBlob.php',
            'windowsazure\\services\\blob\\models\\accesscondition' => '/WindowsAzure/Services/Blob/Models/AccessCondition.php',
            'windowsazure\\services\\blob\\models\\accesspolicy' => '/WindowsAzure/Services/Blob/Models/AccessPolicy.php',
            'windowsazure\\services\\blob\\models\\acquireleaseoptions' => '/WindowsAzure/Services/Blob/Models/AcquireLeaseOptions.php',
            'windowsazure\\services\\blob\\models\\acquireleaseresult' => '/WindowsAzure/Services/Blob/Models/AcquireLeaseResult.php',
            'windowsazure\\services\\blob\\models\\blob' => '/WindowsAzure/Services/Blob/Models/Blob.php',
            'windowsazure\\services\\blob\\models\\blobblocktype' => '/WindowsAzure/Services/Blob/Models/BlobBlockType.php',
            'windowsazure\\services\\blob\\models\\blobprefix' => '/WindowsAzure/Services/Blob/Models/BlobPrefix.php',
            'windowsazure\\services\\blob\\models\\blobproperties' => '/WindowsAzure/Services/Blob/Models/BlobProperties.php',
            'windowsazure\\services\\blob\\models\\blobserviceoptions' => '/WindowsAzure/Services/Blob/Models/BlobServiceOptions.php',
            'windowsazure\\services\\blob\\models\\blobtype' => '/WindowsAzure/Services/Blob/Models/BlobType.php',
            'windowsazure\\services\\blob\\models\\block' => '/WindowsAzure/Services/Blob/Models/Block.php',
            'windowsazure\\services\\blob\\models\\blocklist' => '/WindowsAzure/Services/Blob/Models/BlockList.php',
            'windowsazure\\services\\blob\\models\\commitblobblocksoptions' => '/WindowsAzure/Services/Blob/Models/CommitBlobBlocksOptions.php',
            'windowsazure\\services\\blob\\models\\container' => '/WindowsAzure/Services/Blob/Models/Container.php',
            'windowsazure\\services\\blob\\models\\containeracl' => '/WindowsAzure/Services/Blob/Models/ContainerACL.php',
            'windowsazure\\services\\blob\\models\\containerproperties' => '/WindowsAzure/Services/Blob/Models/ContainerProperties.php',
            'windowsazure\\services\\blob\\models\\copybloboptions' => '/WindowsAzure/Services/Blob/Models/CopyBlobOptions.php',
            'windowsazure\\services\\blob\\models\\createblobblockoptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobBlockOptions.php',
            'windowsazure\\services\\blob\\models\\createbloboptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobOptions.php',
            'windowsazure\\services\\blob\\models\\createblobpagesoptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobPagesOptions.php',
            'windowsazure\\services\\blob\\models\\createblobpagesresult' => '/WindowsAzure/Services/Blob/Models/CreateBlobPagesResult.php',
            'windowsazure\\services\\blob\\models\\createblobsnapshotoptions' => '/WindowsAzure/Services/Blob/Models/CreateBlobSnapshotOptions.php',
            'windowsazure\\services\\blob\\models\\createblobsnapshotresult' => '/WindowsAzure/Services/Blob/Models/CreateBlobSnapshotResult.php',
            'windowsazure\\services\\blob\\models\\createcontaineroptions' => '/WindowsAzure/Services/Blob/Models/CreateContainerOptions.php',
            'windowsazure\\services\\blob\\models\\deletebloboptions' => '/WindowsAzure/Services/Blob/Models/DeleteBlobOptions.php',
            'windowsazure\\services\\blob\\models\\deletecontaineroptions' => '/WindowsAzure/Services/Blob/Models/DeleteContainerOptions.php',
            'windowsazure\\services\\blob\\models\\getblobmetadataoptions' => '/WindowsAzure/Services/Blob/Models/GetBlobMetadataOptions.php',
            'windowsazure\\services\\blob\\models\\getblobmetadataresult' => '/WindowsAzure/Services/Blob/Models/GetBlobMetadataResult.php',
            'windowsazure\\services\\blob\\models\\getbloboptions' => '/WindowsAzure/Services/Blob/Models/GetBlobOptions.php',
            'windowsazure\\services\\blob\\models\\getblobpropertiesoptions' => '/WindowsAzure/Services/Blob/Models/GetBlobPropertiesOptions.php',
            'windowsazure\\services\\blob\\models\\getblobpropertiesresult' => '/WindowsAzure/Services/Blob/Models/GetBlobPropertiesResult.php',
            'windowsazure\\services\\blob\\models\\getblobresult' => '/WindowsAzure/Services/Blob/Models/GetBlobResult.php',
            'windowsazure\\services\\blob\\models\\getcontaineraclresult' => '/WindowsAzure/Services/Blob/Models/GetContainerACLResult.php',
            'windowsazure\\services\\blob\\models\\getcontainerpropertiesresult' => '/WindowsAzure/Services/Blob/Models/GetContainerPropertiesResult.php',
            'windowsazure\\services\\blob\\models\\leasemode' => '/WindowsAzure/Services/Blob/Models/LeaseMode.php',
            'windowsazure\\services\\blob\\models\\listblobblocksoptions' => '/WindowsAzure/Services/Blob/Models/ListBlobBlocksOptions.php',
            'windowsazure\\services\\blob\\models\\listblobblocksresult' => '/WindowsAzure/Services/Blob/Models/ListBlobBlocksResult.php',
            'windowsazure\\services\\blob\\models\\listblobsoptions' => '/WindowsAzure/Services/Blob/Models/ListBlobsOptions.php',
            'windowsazure\\services\\blob\\models\\listblobsresult' => '/WindowsAzure/Services/Blob/Models/ListBlobsResult.php',
            'windowsazure\\services\\blob\\models\\listcontainersoptions' => '/WindowsAzure/Services/Blob/Models/ListContainersOptions.php',
            'windowsazure\\services\\blob\\models\\listcontainersresult' => '/WindowsAzure/Services/Blob/Models/ListContainersResult.php',
            'windowsazure\\services\\blob\\models\\listpageblobrangesoptions' => '/WindowsAzure/Services/Blob/Models/ListPageBlobRangesOptions.php',
            'windowsazure\\services\\blob\\models\\listpageblobrangesresult' => '/WindowsAzure/Services/Blob/Models/ListPageBlobRangesResult.php',
            'windowsazure\\services\\blob\\models\\pagerange' => '/WindowsAzure/Services/Blob/Models/PageRange.php',
            'windowsazure\\services\\blob\\models\\pagewriteoption' => '/WindowsAzure/Services/Blob/Models/PageWriteOption.php',
            'windowsazure\\services\\blob\\models\\publicaccesstype' => '/WindowsAzure/Services/Blob/Models/PublicAccessType.php',
            'windowsazure\\services\\blob\\models\\setblobmetadataoptions' => '/WindowsAzure/Services/Blob/Models/SetBlobMetadataOptions.php',
            'windowsazure\\services\\blob\\models\\setblobmetadataresult' => '/WindowsAzure/Services/Blob/Models/SetBlobMetadataResult.php',
            'windowsazure\\services\\blob\\models\\setblobpropertiesoptions' => '/WindowsAzure/Services/Blob/Models/SetBlobPropertiesOptions.php',
            'windowsazure\\services\\blob\\models\\setblobpropertiesresult' => '/WindowsAzure/Services/Blob/Models/SetBlobPropertiesResult.php',
            'windowsazure\\services\\blob\\models\\setcontainermetadataoptions' => '/WindowsAzure/Services/Blob/Models/SetContainerMetadataOptions.php',
            'windowsazure\\services\\blob\\models\\signedidentifier' => '/WindowsAzure/Services/Blob/Models/SignedIdentifier.php',
            'windowsazure\\services\\blob\\models\\sourceaccesscondition' => '/WindowsAzure/Services/Blob/Models/SourceAccessCondition.php',
            'windowsazure\\services\\core\\models\\getservicepropertiesresult' => '/WindowsAzure/Services/Core/Models/GetServicePropertiesResult.php',
            'windowsazure\\services\\core\\models\\logging' => '/WindowsAzure/Services/Core/Models/Logging.php',
            'windowsazure\\services\\core\\models\\metrics' => '/WindowsAzure/Services/Core/Models/Metrics.php',
            'windowsazure\\services\\core\\models\\retentionpolicy' => '/WindowsAzure/Services/Core/Models/RetentionPolicy.php',
            'windowsazure\\services\\core\\models\\serviceproperties' => '/WindowsAzure/Services/Core/Models/ServiceProperties.php',
            'windowsazure\\services\\core\\servicerestproxy' => '/WindowsAzure/Services/Core/ServiceRestProxy.php',
            'windowsazure\\services\\queue\\iqueue' => '/WindowsAzure/Services/Queue/IQueue.php',
            'windowsazure\\services\\queue\\models\\createmessageoptions' => '/WindowsAzure/Services/Queue/Models/CreateMessageOptions.php',
            'windowsazure\\services\\queue\\models\\createqueueoptions' => '/WindowsAzure/Services/Queue/Models/CreateQueueOptions.php',
            'windowsazure\\services\\queue\\models\\getqueuemetadataresult' => '/WindowsAzure/Services/Queue/Models/GetQueueMetadataResult.php',
            'windowsazure\\services\\queue\\models\\listmessagesoptions' => '/WindowsAzure/Services/Queue/Models/ListMessagesOptions.php',
            'windowsazure\\services\\queue\\models\\listmessagesresult' => '/WindowsAzure/Services/Queue/Models/ListMessagesResult.php',
            'windowsazure\\services\\queue\\models\\listqueuesoptions' => '/WindowsAzure/Services/Queue/Models/ListQueuesOptions.php',
            'windowsazure\\services\\queue\\models\\listqueuesresult' => '/WindowsAzure/Services/Queue/Models/ListQueuesResult.php',
            'windowsazure\\services\\queue\\models\\peekmessagesoptions' => '/WindowsAzure/Services/Queue/Models/PeekMessagesOptions.php',
            'windowsazure\\services\\queue\\models\\peekmessagesresult' => '/WindowsAzure/Services/Queue/Models/PeekMessagesResult.php',
            'windowsazure\\services\\queue\\models\\queue' => '/WindowsAzure/Services/Queue/Models/Queue.php',
            'windowsazure\\services\\queue\\models\\queuemessage' => '/WindowsAzure/Services/Queue/Models/QueueMessage.php',
            'windowsazure\\services\\queue\\models\\queueserviceoptions' => '/WindowsAzure/Services/Queue/Models/QueueServiceOptions.php',
            'windowsazure\\services\\queue\\models\\updatemessageresult' => '/WindowsAzure/Services/Queue/Models/UpdateMessageResult.php',
            'windowsazure\\services\\queue\\models\\windowsazurequeuemessage' => '/WindowsAzure/Services/Queue/Models/WindowsAzureQueueMessage.php',
            'windowsazure\\services\\queue\\queuerestproxy' => '/WindowsAzure/Services/Queue/QueueRestProxy.php',
            'windowsazure\\services\\queue\\queueservice' => '/WindowsAzure/Services/Queue/QueueService.php',
            'windowsazure\\services\\queue\\queuesettings' => '/WindowsAzure/Services/Queue/QueueSettings.php',
            'windowsazure\\services\\servicebus\\models\\wrapaccesstokenresult' => '/WindowsAzure/Services/ServiceBus/models/WrapAccessTokenResult.php',
            'windowsazure\\services\\servicebus\\servicebusrestproxy' => '/WindowsAzure/Services/ServiceBus/ServiceBusRestProxy.php',
            'windowsazure\\services\\servicebus\\servicebusservice' => '/WindowsAzure/Services/ServiceBus/ServiceBusService.php',
            'windowsazure\\services\\servicebus\\servicebussettings' => '/WindowsAzure/Services/ServiceBus/ServiceBusSettings.php',
            'windowsazure\\services\\servicebus\\wraprestproxy' => '/WindowsAzure/Services/ServiceBus/WrapRestProxy.php',
            'windowsazure\\services\\servicebus\\wrapservice' => '/WindowsAzure/Services/ServiceBus/WrapService.php',
            'windowsazure\\services\\table\\itable' => '/WindowsAzure/Services/Table/ITable.php',
            'windowsazure\\services\\table\\models\\batcherror' => '/WindowsAzure/Services/Table/Models/BatchError.php',
            'windowsazure\\services\\table\\models\\batchoperation' => '/WindowsAzure/Services/Table/Models/BatchOperation.php',
            'windowsazure\\services\\table\\models\\batchoperationparametername' => '/WindowsAzure/Services/Table/Models/BatchOperationParameterName.php',
            'windowsazure\\services\\table\\models\\batchoperations' => '/WindowsAzure/Services/Table/Models/BatchOperations.php',
            'windowsazure\\services\\table\\models\\batchoperationtype' => '/WindowsAzure/Services/Table/Models/BatchOperationType.php',
            'windowsazure\\services\\table\\models\\batchresult' => '/WindowsAzure/Services/Table/Models/BatchResult.php',
            'windowsazure\\services\\table\\models\\deleteentityoptions' => '/WindowsAzure/Services/Table/Models/DeleteEntityOptions.php',
            'windowsazure\\services\\table\\models\\edmtype' => '/WindowsAzure/Services/Table/Models/EdmType.php',
            'windowsazure\\services\\table\\models\\entity' => '/WindowsAzure/Services/Table/Models/Entity.php',
            'windowsazure\\services\\table\\models\\filters\\binaryfilter' => '/WindowsAzure/Services/Table/Models/Filters/BinaryFilter.php',
            'windowsazure\\services\\table\\models\\filters\\constantfilter' => '/WindowsAzure/Services/Table/Models/Filters/ConstantFilter.php',
            'windowsazure\\services\\table\\models\\filters\\filter' => '/WindowsAzure/Services/Table/Models/Filters/Filter.php',
            'windowsazure\\services\\table\\models\\filters\\propertynamefilter' => '/WindowsAzure/Services/Table/Models/Filters/PropertyNameFilter.php',
            'windowsazure\\services\\table\\models\\filters\\querystringfilter' => '/WindowsAzure/Services/Table/Models/Filters/QueryStringFilter.php',
            'windowsazure\\services\\table\\models\\filters\\unaryfilter' => '/WindowsAzure/Services/Table/Models/Filters/UnaryFilter.php',
            'windowsazure\\services\\table\\models\\getentityresult' => '/WindowsAzure/Services/Table/Models/GetEntityResult.php',
            'windowsazure\\services\\table\\models\\gettableresult' => '/WindowsAzure/Services/Table/Models/GetTableResult.php',
            'windowsazure\\services\\table\\models\\insertentityresult' => '/WindowsAzure/Services/Table/Models/InsertEntityResult.php',
            'windowsazure\\services\\table\\models\\property' => '/WindowsAzure/Services/Table/Models/Property.php',
            'windowsazure\\services\\table\\models\\query' => '/WindowsAzure/Services/Table/Models/Query.php',
            'windowsazure\\services\\table\\models\\queryentitiesoptions' => '/WindowsAzure/Services/Table/Models/QueryEntitiesOptions.php',
            'windowsazure\\services\\table\\models\\queryentitiesresult' => '/WindowsAzure/Services/Table/Models/QueryEntitiesResult.php',
            'windowsazure\\services\\table\\models\\querytablesoptions' => '/WindowsAzure/Services/Table/Models/QueryTablesOptions.php',
            'windowsazure\\services\\table\\models\\querytablesresult' => '/WindowsAzure/Services/Table/Models/QueryTablesResult.php',
            'windowsazure\\services\\table\\models\\tableserviceoptions' => '/WindowsAzure/Services/Table/Models/TableServiceOptions.php',
            'windowsazure\\services\\table\\models\\updateentityresult' => '/WindowsAzure/Services/Table/Models/UpdateEntityResult.php',
            'windowsazure\\services\\table\\tablerestproxy' => '/WindowsAzure/Services/Table/TableRestProxy.php',
            'windowsazure\\services\\table\\tableservice' => '/WindowsAzure/Services/Table/TableService.php',
            'windowsazure\\services\\table\\tablesettings' => '/WindowsAzure/Services/Table/TableSettings.php',
            'windowsazure\\services\\table\\utilities\\atomreaderwriter' => '/WindowsAzure/Services/Table/Utilities/AtomReaderWriter.php',
            'windowsazure\\services\\table\\utilities\\iatomreaderwriter' => '/WindowsAzure/Services/Table/Utilities/IAtomReaderWriter.php',
            'windowsazure\\services\\table\\utilities\\imimereaderwriter' => '/WindowsAzure/Services/Table/Utilities/IMimeReaderWriter.php',
            'windowsazure\\services\\table\\utilities\\mimereaderwriter' => '/WindowsAzure/Services/Table/Utilities/MimeReaderWriter.php',
            'windowsazure\\utilities' => '/WindowsAzure/Utilities.php',
            'windowsazure\\validate' => '/WindowsAzure/Validate.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
