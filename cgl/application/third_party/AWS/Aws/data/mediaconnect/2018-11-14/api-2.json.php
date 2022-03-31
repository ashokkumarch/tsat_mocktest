<?php
// This file was auto-generated from sdk-root/src/data/mediaconnect/2018-11-14/api-2.json
return [ 'metadata' => [ 'apiVersion' => '2018-11-14', 'endpointPrefix' => 'mediaconnect', 'signingName' => 'mediaconnect', 'serviceFullName' => 'AWS MediaConnect', 'serviceId' => 'MediaConnect', 'protocol' => 'rest-json', 'jsonVersion' => '1.1', 'uid' => 'mediaconnect-2018-11-14', 'signatureVersion' => 'v4', ], 'operations' => [ 'AddFlowOutputs' => [ 'name' => 'AddFlowOutputs', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/flows/{flowArn}/outputs', 'responseCode' => 201, ], 'input' => [ 'shape' => 'AddFlowOutputsRequest', ], 'output' => [ 'shape' => 'AddFlowOutputsResponse', ], 'errors' => [ [ 'shape' => 'AddFlowOutputs420Exception', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'CreateFlow' => [ 'name' => 'CreateFlow', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/flows', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateFlowRequest', ], 'output' => [ 'shape' => 'CreateFlowResponse', ], 'errors' => [ [ 'shape' => 'CreateFlow420Exception', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DeleteFlow' => [ 'name' => 'DeleteFlow', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v1/flows/{flowArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteFlowRequest', ], 'output' => [ 'shape' => 'DeleteFlowResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DescribeFlow' => [ 'name' => 'DescribeFlow', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/flows/{flowArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeFlowRequest', ], 'output' => [ 'shape' => 'DescribeFlowResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'GrantFlowEntitlements' => [ 'name' => 'GrantFlowEntitlements', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/flows/{flowArn}/entitlements', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GrantFlowEntitlementsRequest', ], 'output' => [ 'shape' => 'GrantFlowEntitlementsResponse', ], 'errors' => [ [ 'shape' => 'GrantFlowEntitlements420Exception', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListEntitlements' => [ 'name' => 'ListEntitlements', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/entitlements', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListEntitlementsRequest', ], 'output' => [ 'shape' => 'ListEntitlementsResponse', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'ListFlows' => [ 'name' => 'ListFlows', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/flows', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListFlowsRequest', ], 'output' => [ 'shape' => 'ListFlowsResponse', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'RemoveFlowOutput' => [ 'name' => 'RemoveFlowOutput', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v1/flows/{flowArn}/outputs/{outputArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'RemoveFlowOutputRequest', ], 'output' => [ 'shape' => 'RemoveFlowOutputResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'RevokeFlowEntitlement' => [ 'name' => 'RevokeFlowEntitlement', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v1/flows/{flowArn}/entitlements/{entitlementArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'RevokeFlowEntitlementRequest', ], 'output' => [ 'shape' => 'RevokeFlowEntitlementResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'StartFlow' => [ 'name' => 'StartFlow', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/flows/start/{flowArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'StartFlowRequest', ], 'output' => [ 'shape' => 'StartFlowResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'StopFlow' => [ 'name' => 'StopFlow', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/flows/stop/{flowArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'StopFlowRequest', ], 'output' => [ 'shape' => 'StopFlowResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'UpdateFlowEntitlement' => [ 'name' => 'UpdateFlowEntitlement', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/flows/{flowArn}/entitlements/{entitlementArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateFlowEntitlementRequest', ], 'output' => [ 'shape' => 'UpdateFlowEntitlementResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UpdateFlowOutput' => [ 'name' => 'UpdateFlowOutput', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/flows/{flowArn}/outputs/{outputArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateFlowOutputRequest', ], 'output' => [ 'shape' => 'UpdateFlowOutputResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UpdateFlowSource' => [ 'name' => 'UpdateFlowSource', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/flows/{flowArn}/source/{sourceArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateFlowSourceRequest', ], 'output' => [ 'shape' => 'UpdateFlowSourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], ], 'shapes' => [ 'AddFlowOutputs420Exception' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 420, ], ], 'AddFlowOutputsRequest' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], 'Outputs' => [ 'shape' => '__listOfAddOutputRequest', 'locationName' => 'outputs', ], ], 'required' => [ 'FlowArn', 'Outputs', ], ], 'AddFlowOutputsResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Outputs' => [ 'shape' => '__listOfOutput', 'locationName' => 'outputs', ], ], ], 'AddOutputRequest' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'Destination' => [ 'shape' => '__string', 'locationName' => 'destination', ], 'Encryption' => [ 'shape' => 'Encryption', 'locationName' => 'encryption', ], 'MaxLatency' => [ 'shape' => '__integer', 'locationName' => 'maxLatency', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'Port' => [ 'shape' => '__integer', 'locationName' => 'port', ], 'Protocol' => [ 'shape' => 'Protocol', 'locationName' => 'protocol', ], 'SmoothingLatency' => [ 'shape' => '__integer', 'locationName' => 'smoothingLatency', ], 'StreamId' => [ 'shape' => '__string', 'locationName' => 'streamId', ], ], 'required' => [ 'Destination', 'Port', 'Protocol', ], ], 'Algorithm' => [ 'type' => 'string', 'enum' => [ 'aes128', 'aes192', 'aes256', ], ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 400, ], ], 'CreateFlow420Exception' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 420, ], ], 'CreateFlowRequest' => [ 'type' => 'structure', 'members' => [ 'AvailabilityZone' => [ 'shape' => '__string', 'locationName' => 'availabilityZone', ], 'Entitlements' => [ 'shape' => '__listOfGrantEntitlementRequest', 'locationName' => 'entitlements', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'Outputs' => [ 'shape' => '__listOfAddOutputRequest', 'locationName' => 'outputs', ], 'Source' => [ 'shape' => 'SetSourceRequest', 'locationName' => 'source', ], ], 'required' => [ 'Source', 'Name', ], ], 'CreateFlowResponse' => [ 'type' => 'structure', 'members' => [ 'Flow' => [ 'shape' => 'Flow', 'locationName' => 'flow', ], ], ], 'DeleteFlowRequest' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], ], 'required' => [ 'FlowArn', ], ], 'DeleteFlowResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Status' => [ 'shape' => 'Status', 'locationName' => 'status', ], ], ], 'DescribeFlowRequest' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], ], 'required' => [ 'FlowArn', ], ], 'DescribeFlowResponse' => [ 'type' => 'structure', 'members' => [ 'Flow' => [ 'shape' => 'Flow', 'locationName' => 'flow', ], 'Messages' => [ 'shape' => 'Messages', 'locationName' => 'messages', ], ], ], 'Encryption' => [ 'type' => 'structure', 'members' => [ 'Algorithm' => [ 'shape' => 'Algorithm', 'locationName' => 'algorithm', ], 'KeyType' => [ 'shape' => 'KeyType', 'locationName' => 'keyType', ], 'RoleArn' => [ 'shape' => '__string', 'locationName' => 'roleArn', ], 'SecretArn' => [ 'shape' => '__string', 'locationName' => 'secretArn', ], ], 'required' => [ 'SecretArn', 'Algorithm', 'RoleArn', ], ], 'Entitlement' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'Encryption' => [ 'shape' => 'Encryption', 'locationName' => 'encryption', ], 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'Subscribers' => [ 'shape' => '__listOf__string', 'locationName' => 'subscribers', ], ], 'required' => [ 'EntitlementArn', 'Subscribers', 'Name', ], ], 'Flow' => [ 'type' => 'structure', 'members' => [ 'AvailabilityZone' => [ 'shape' => '__string', 'locationName' => 'availabilityZone', ], 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'EgressIp' => [ 'shape' => '__string', 'locationName' => 'egressIp', ], 'Entitlements' => [ 'shape' => '__listOfEntitlement', 'locationName' => 'entitlements', ], 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'Outputs' => [ 'shape' => '__listOfOutput', 'locationName' => 'outputs', ], 'Source' => [ 'shape' => 'Source', 'locationName' => 'source', ], 'Status' => [ 'shape' => 'Status', 'locationName' => 'status', ], ], 'required' => [ 'Status', 'Entitlements', 'Outputs', 'AvailabilityZone', 'FlowArn', 'Source', 'Name', ], ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 403, ], ], 'GrantEntitlementRequest' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'Encryption' => [ 'shape' => 'Encryption', 'locationName' => 'encryption', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'Subscribers' => [ 'shape' => '__listOf__string', 'locationName' => 'subscribers', ], ], 'required' => [ 'Subscribers', ], ], 'GrantFlowEntitlements420Exception' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 420, ], ], 'GrantFlowEntitlementsRequest' => [ 'type' => 'structure', 'members' => [ 'Entitlements' => [ 'shape' => '__listOfGrantEntitlementRequest', 'locationName' => 'entitlements', ], 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], ], 'required' => [ 'FlowArn', 'Entitlements', ], ], 'GrantFlowEntitlementsResponse' => [ 'type' => 'structure', 'members' => [ 'Entitlements' => [ 'shape' => '__listOfEntitlement', 'locationName' => 'entitlements', ], 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], ], ], 'InternalServerErrorException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 500, ], ], 'KeyType' => [ 'type' => 'string', 'enum' => [ 'static-key', ], ], 'ListEntitlementsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListEntitlementsResponse' => [ 'type' => 'structure', 'members' => [ 'Entitlements' => [ 'shape' => '__listOfListedEntitlement', 'locationName' => 'entitlements', ], 'NextToken' => [ 'shape' => '__string', 'locationName' => 'nextToken', ], ], ], 'ListFlowsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListFlowsResponse' => [ 'type' => 'structure', 'members' => [ 'Flows' => [ 'shape' => '__listOfListedFlow', 'locationName' => 'flows', ], 'NextToken' => [ 'shape' => '__string', 'locationName' => 'nextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], 'required' => [ 'ResourceArn', ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], ], 'ListedEntitlement' => [ 'type' => 'structure', 'members' => [ 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'EntitlementName' => [ 'shape' => '__string', 'locationName' => 'entitlementName', ], ], 'required' => [ 'EntitlementArn', 'EntitlementName', ], ], 'ListedFlow' => [ 'type' => 'structure', 'members' => [ 'AvailabilityZone' => [ 'shape' => '__string', 'locationName' => 'availabilityZone', ], 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'SourceType' => [ 'shape' => 'SourceType', 'locationName' => 'sourceType', ], 'Status' => [ 'shape' => 'Status', 'locationName' => 'status', ], ], 'required' => [ 'Status', 'Description', 'SourceType', 'AvailabilityZone', 'FlowArn', 'Name', ], ], 'MaxResults' => [ 'type' => 'integer', 'min' => 1, 'max' => 1000, ], 'Messages' => [ 'type' => 'structure', 'members' => [ 'Errors' => [ 'shape' => '__listOf__string', 'locationName' => 'errors', ], ], 'required' => [ 'Errors', ], ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 404, ], ], 'Output' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'Destination' => [ 'shape' => '__string', 'locationName' => 'destination', ], 'Encryption' => [ 'shape' => 'Encryption', 'locationName' => 'encryption', ], 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'MediaLiveInputArn' => [ 'shape' => '__string', 'locationName' => 'mediaLiveInputArn', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'OutputArn' => [ 'shape' => '__string', 'locationName' => 'outputArn', ], 'Port' => [ 'shape' => '__integer', 'locationName' => 'port', ], 'Transport' => [ 'shape' => 'Transport', 'locationName' => 'transport', ], ], 'required' => [ 'OutputArn', 'Name', ], ], 'Protocol' => [ 'type' => 'string', 'enum' => [ 'zixi-push', 'rtp-fec', 'rtp', ], ], 'RemoveFlowOutputRequest' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], 'OutputArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'outputArn', ], ], 'required' => [ 'FlowArn', 'OutputArn', ], ], 'RemoveFlowOutputResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'OutputArn' => [ 'shape' => '__string', 'locationName' => 'outputArn', ], ], ], 'ResponseError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], ], 'RevokeFlowEntitlementRequest' => [ 'type' => 'structure', 'members' => [ 'EntitlementArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'entitlementArn', ], 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], ], 'required' => [ 'FlowArn', 'EntitlementArn', ], ], 'RevokeFlowEntitlementResponse' => [ 'type' => 'structure', 'members' => [ 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], ], ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 503, ], ], 'SetSourceRequest' => [ 'type' => 'structure', 'members' => [ 'Decryption' => [ 'shape' => 'Encryption', 'locationName' => 'decryption', ], 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'IngestPort' => [ 'shape' => '__integer', 'locationName' => 'ingestPort', ], 'MaxBitrate' => [ 'shape' => '__integer', 'locationName' => 'maxBitrate', ], 'MaxLatency' => [ 'shape' => '__integer', 'locationName' => 'maxLatency', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'Protocol' => [ 'shape' => 'Protocol', 'locationName' => 'protocol', ], 'StreamId' => [ 'shape' => '__string', 'locationName' => 'streamId', ], 'WhitelistCidr' => [ 'shape' => '__string', 'locationName' => 'whitelistCidr', ], ], ], 'Source' => [ 'type' => 'structure', 'members' => [ 'Decryption' => [ 'shape' => 'Encryption', 'locationName' => 'decryption', ], 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'IngestIp' => [ 'shape' => '__string', 'locationName' => 'ingestIp', ], 'IngestPort' => [ 'shape' => '__integer', 'locationName' => 'ingestPort', ], 'Name' => [ 'shape' => '__string', 'locationName' => 'name', ], 'SourceArn' => [ 'shape' => '__string', 'locationName' => 'sourceArn', ], 'Transport' => [ 'shape' => 'Transport', 'locationName' => 'transport', ], 'WhitelistCidr' => [ 'shape' => '__string', 'locationName' => 'whitelistCidr', ], ], 'required' => [ 'SourceArn', 'Name', ], ], 'SourceType' => [ 'type' => 'string', 'enum' => [ 'OWNED', 'ENTITLED', ], ], 'StartFlowRequest' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], ], 'required' => [ 'FlowArn', ], ], 'StartFlowResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Status' => [ 'shape' => 'Status', 'locationName' => 'status', ], ], ], 'Status' => [ 'type' => 'string', 'enum' => [ 'STANDBY', 'ACTIVE', 'UPDATING', 'DELETING', 'STARTING', 'STOPPING', 'ERROR', ], ], 'StopFlowRequest' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], ], 'required' => [ 'FlowArn', ], ], 'StopFlowResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Status' => [ 'shape' => 'Status', 'locationName' => 'status', ], ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], 'required' => [ 'ResourceArn', 'Tags', ], ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'required' => [ 'Message', ], 'exception' => true, 'error' => [ 'httpStatusCode' => 429, ], ], 'Transport' => [ 'type' => 'structure', 'members' => [ 'MaxBitrate' => [ 'shape' => '__integer', 'locationName' => 'maxBitrate', ], 'MaxLatency' => [ 'shape' => '__integer', 'locationName' => 'maxLatency', ], 'Protocol' => [ 'shape' => 'Protocol', 'locationName' => 'protocol', ], 'SmoothingLatency' => [ 'shape' => '__integer', 'locationName' => 'smoothingLatency', ], 'StreamId' => [ 'shape' => '__string', 'locationName' => 'streamId', ], ], 'required' => [ 'Protocol', ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'TagKeys' => [ 'shape' => '__listOf__string', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], 'required' => [ 'TagKeys', 'ResourceArn', ], ], 'UpdateEncryption' => [ 'type' => 'structure', 'members' => [ 'Algorithm' => [ 'shape' => 'Algorithm', 'locationName' => 'algorithm', ], 'KeyType' => [ 'shape' => 'KeyType', 'locationName' => 'keyType', ], 'RoleArn' => [ 'shape' => '__string', 'locationName' => 'roleArn', ], 'SecretArn' => [ 'shape' => '__string', 'locationName' => 'secretArn', ], ], ], 'UpdateFlowEntitlementRequest' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'Encryption' => [ 'shape' => 'UpdateEncryption', 'locationName' => 'encryption', ], 'EntitlementArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'entitlementArn', ], 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], 'Subscribers' => [ 'shape' => '__listOf__string', 'locationName' => 'subscribers', ], ], 'required' => [ 'FlowArn', 'EntitlementArn', ], ], 'UpdateFlowEntitlementResponse' => [ 'type' => 'structure', 'members' => [ 'Entitlement' => [ 'shape' => 'Entitlement', 'locationName' => 'entitlement', ], 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], ], ], 'UpdateFlowOutputRequest' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'Destination' => [ 'shape' => '__string', 'locationName' => 'destination', ], 'Encryption' => [ 'shape' => 'UpdateEncryption', 'locationName' => 'encryption', ], 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], 'MaxLatency' => [ 'shape' => '__integer', 'locationName' => 'maxLatency', ], 'OutputArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'outputArn', ], 'Port' => [ 'shape' => '__integer', 'locationName' => 'port', ], 'Protocol' => [ 'shape' => 'Protocol', 'locationName' => 'protocol', ], 'SmoothingLatency' => [ 'shape' => '__integer', 'locationName' => 'smoothingLatency', ], 'StreamId' => [ 'shape' => '__string', 'locationName' => 'streamId', ], ], 'required' => [ 'FlowArn', 'OutputArn', ], ], 'UpdateFlowOutputResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Output' => [ 'shape' => 'Output', 'locationName' => 'output', ], ], ], 'UpdateFlowSourceRequest' => [ 'type' => 'structure', 'members' => [ 'Decryption' => [ 'shape' => 'UpdateEncryption', 'locationName' => 'decryption', ], 'Description' => [ 'shape' => '__string', 'locationName' => 'description', ], 'EntitlementArn' => [ 'shape' => '__string', 'locationName' => 'entitlementArn', ], 'FlowArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'flowArn', ], 'IngestPort' => [ 'shape' => '__integer', 'locationName' => 'ingestPort', ], 'MaxBitrate' => [ 'shape' => '__integer', 'locationName' => 'maxBitrate', ], 'MaxLatency' => [ 'shape' => '__integer', 'locationName' => 'maxLatency', ], 'Protocol' => [ 'shape' => 'Protocol', 'locationName' => 'protocol', ], 'SourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'sourceArn', ], 'StreamId' => [ 'shape' => '__string', 'locationName' => 'streamId', ], 'WhitelistCidr' => [ 'shape' => '__string', 'locationName' => 'whitelistCidr', ], ], 'required' => [ 'FlowArn', 'SourceArn', ], ], 'UpdateFlowSourceResponse' => [ 'type' => 'structure', 'members' => [ 'FlowArn' => [ 'shape' => '__string', 'locationName' => 'flowArn', ], 'Source' => [ 'shape' => 'Source', 'locationName' => 'source', ], ], ], '__boolean' => [ 'type' => 'boolean', ], '__double' => [ 'type' => 'double', ], '__integer' => [ 'type' => 'integer', ], '__listOfAddOutputRequest' => [ 'type' => 'list', 'member' => [ 'shape' => 'AddOutputRequest', ], ], '__listOfEntitlement' => [ 'type' => 'list', 'member' => [ 'shape' => 'Entitlement', ], ], '__listOfGrantEntitlementRequest' => [ 'type' => 'list', 'member' => [ 'shape' => 'GrantEntitlementRequest', ], ], '__listOfListedEntitlement' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListedEntitlement', ], ], '__listOfListedFlow' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListedFlow', ], ], '__listOfOutput' => [ 'type' => 'list', 'member' => [ 'shape' => 'Output', ], ], '__listOf__string' => [ 'type' => 'list', 'member' => [ 'shape' => '__string', ], ], '__long' => [ 'type' => 'long', ], '__mapOf__string' => [ 'type' => 'map', 'key' => [ 'shape' => '__string', ], 'value' => [ 'shape' => '__string', ], ], '__string' => [ 'type' => 'string', ], '__timestampIso8601' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], '__timestampUnix' => [ 'type' => 'timestamp', 'timestampFormat' => 'unixTimestamp', ], ],];
