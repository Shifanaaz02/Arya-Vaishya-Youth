<?php
// This file was auto-generated from sdk-root/src/data/detective/2018-10-26/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-10-26', 'endpointPrefix' => 'api.detective', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Detective', 'serviceId' => 'Detective', 'signatureVersion' => 'v4', 'signingName' => 'detective', 'uid' => 'detective-2018-10-26', ], 'operations' => [ 'AcceptInvitation' => [ 'name' => 'AcceptInvitation', 'http' => [ 'method' => 'PUT', 'requestUri' => '/invitation', ], 'input' => [ 'shape' => 'AcceptInvitationRequest', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'CreateGraph' => [ 'name' => 'CreateGraph', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph', ], 'input' => [ 'shape' => 'CreateGraphRequest', ], 'output' => [ 'shape' => 'CreateGraphResponse', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateMembers' => [ 'name' => 'CreateMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph/members', ], 'input' => [ 'shape' => 'CreateMembersRequest', ], 'output' => [ 'shape' => 'CreateMembersResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'DeleteGraph' => [ 'name' => 'DeleteGraph', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph/removal', ], 'input' => [ 'shape' => 'DeleteGraphRequest', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteMembers' => [ 'name' => 'DeleteMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph/members/removal', ], 'input' => [ 'shape' => 'DeleteMembersRequest', ], 'output' => [ 'shape' => 'DeleteMembersResponse', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeOrganizationConfiguration' => [ 'name' => 'DescribeOrganizationConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/orgs/describeOrganizationConfiguration', ], 'input' => [ 'shape' => 'DescribeOrganizationConfigurationRequest', ], 'output' => [ 'shape' => 'DescribeOrganizationConfigurationResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DisableOrganizationAdminAccount' => [ 'name' => 'DisableOrganizationAdminAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/orgs/disableAdminAccount', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DisassociateMembership' => [ 'name' => 'DisassociateMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/membership/removal', ], 'input' => [ 'shape' => 'DisassociateMembershipRequest', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'EnableOrganizationAdminAccount' => [ 'name' => 'EnableOrganizationAdminAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/orgs/enableAdminAccount', ], 'input' => [ 'shape' => 'EnableOrganizationAdminAccountRequest', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'GetMembers' => [ 'name' => 'GetMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph/members/get', ], 'input' => [ 'shape' => 'GetMembersRequest', ], 'output' => [ 'shape' => 'GetMembersResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListGraphs' => [ 'name' => 'ListGraphs', 'http' => [ 'method' => 'POST', 'requestUri' => '/graphs/list', ], 'input' => [ 'shape' => 'ListGraphsRequest', ], 'output' => [ 'shape' => 'ListGraphsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListInvitations' => [ 'name' => 'ListInvitations', 'http' => [ 'method' => 'POST', 'requestUri' => '/invitations/list', ], 'input' => [ 'shape' => 'ListInvitationsRequest', ], 'output' => [ 'shape' => 'ListInvitationsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListMembers' => [ 'name' => 'ListMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph/members/list', ], 'input' => [ 'shape' => 'ListMembersRequest', ], 'output' => [ 'shape' => 'ListMembersResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListOrganizationAdminAccounts' => [ 'name' => 'ListOrganizationAdminAccounts', 'http' => [ 'method' => 'POST', 'requestUri' => '/orgs/adminAccountslist', ], 'input' => [ 'shape' => 'ListOrganizationAdminAccountsRequest', ], 'output' => [ 'shape' => 'ListOrganizationAdminAccountsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'RejectInvitation' => [ 'name' => 'RejectInvitation', 'http' => [ 'method' => 'POST', 'requestUri' => '/invitation/removal', ], 'input' => [ 'shape' => 'RejectInvitationRequest', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'StartMonitoringMember' => [ 'name' => 'StartMonitoringMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/graph/member/monitoringstate', ], 'input' => [ 'shape' => 'StartMonitoringMemberRequest', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ValidationException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateOrganizationConfiguration' => [ 'name' => 'UpdateOrganizationConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/orgs/updateOrganizationConfiguration', ], 'input' => [ 'shape' => 'UpdateOrganizationConfigurationRequest', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], ], 'shapes' => [ 'AcceptInvitationRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], ], ], 'Account' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'EmailAddress', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], ], ], 'AccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^[0-9]+$', ], 'AccountIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountId', ], 'max' => 50, 'min' => 1, ], 'AccountList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], 'max' => 50, 'min' => 1, ], 'Administrator' => [ 'type' => 'structure', 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'GraphArn' => [ 'shape' => 'GraphArn', ], 'DelegationTime' => [ 'shape' => 'Timestamp', ], ], ], 'AdministratorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Administrator', ], ], 'Boolean' => [ 'type' => 'boolean', ], 'ByteValue' => [ 'type' => 'long', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'CreateGraphRequest' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateGraphResponse' => [ 'type' => 'structure', 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], ], ], 'CreateMembersRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', 'Accounts', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], 'Message' => [ 'shape' => 'EmailMessage', ], 'DisableEmailNotification' => [ 'shape' => 'Boolean', ], 'Accounts' => [ 'shape' => 'AccountList', ], ], ], 'CreateMembersResponse' => [ 'type' => 'structure', 'members' => [ 'Members' => [ 'shape' => 'MemberDetailList', ], 'UnprocessedAccounts' => [ 'shape' => 'UnprocessedAccountList', ], ], ], 'DeleteGraphRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], ], ], 'DeleteMembersRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', 'AccountIds', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], 'AccountIds' => [ 'shape' => 'AccountIdList', ], ], ], 'DeleteMembersResponse' => [ 'type' => 'structure', 'members' => [ 'AccountIds' => [ 'shape' => 'AccountIdList', ], 'UnprocessedAccounts' => [ 'shape' => 'UnprocessedAccountList', ], ], ], 'DescribeOrganizationConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], ], ], 'DescribeOrganizationConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'AutoEnable' => [ 'shape' => 'Boolean', ], ], ], 'DisassociateMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], ], ], 'EmailAddress' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^.+@.+$', ], 'EmailMessage' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ], 'EnableOrganizationAdminAccountRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'GetMembersRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', 'AccountIds', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], 'AccountIds' => [ 'shape' => 'AccountIdList', ], ], ], 'GetMembersResponse' => [ 'type' => 'structure', 'members' => [ 'MemberDetails' => [ 'shape' => 'MemberDetailList', ], 'UnprocessedAccounts' => [ 'shape' => 'UnprocessedAccountList', ], ], ], 'Graph' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'GraphArn', ], 'CreatedTime' => [ 'shape' => 'Timestamp', ], ], ], 'GraphArn' => [ 'type' => 'string', 'pattern' => '^arn:aws[-\\w]{0,10}?:detective:[-\\w]{2,20}?:\\d{12}?:graph:[abcdef\\d]{32}?$', ], 'GraphList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Graph', ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'InvitationType' => [ 'type' => 'string', 'enum' => [ 'INVITATION', 'ORGANIZATION', ], ], 'ListGraphsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MemberResultsLimit', ], ], ], 'ListGraphsResponse' => [ 'type' => 'structure', 'members' => [ 'GraphList' => [ 'shape' => 'GraphList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListInvitationsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MemberResultsLimit', ], ], ], 'ListInvitationsResponse' => [ 'type' => 'structure', 'members' => [ 'Invitations' => [ 'shape' => 'MemberDetailList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListMembersRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MemberResultsLimit', ], ], ], 'ListMembersResponse' => [ 'type' => 'structure', 'members' => [ 'MemberDetails' => [ 'shape' => 'MemberDetailList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListOrganizationAdminAccountsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', ], 'MaxResults' => [ 'shape' => 'MemberResultsLimit', ], ], ], 'ListOrganizationAdminAccountsResponse' => [ 'type' => 'structure', 'members' => [ 'Administrators' => [ 'shape' => 'AdministratorList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'GraphArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'MemberDetail' => [ 'type' => 'structure', 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'GraphArn' => [ 'shape' => 'GraphArn', ], 'MasterId' => [ 'shape' => 'AccountId', 'deprecated' => true, 'deprecatedMessage' => 'This property is deprecated. Use AdministratorId instead.', ], 'AdministratorId' => [ 'shape' => 'AccountId', ], 'Status' => [ 'shape' => 'MemberStatus', ], 'DisabledReason' => [ 'shape' => 'MemberDisabledReason', ], 'InvitedTime' => [ 'shape' => 'Timestamp', ], 'UpdatedTime' => [ 'shape' => 'Timestamp', ], 'VolumeUsageInBytes' => [ 'shape' => 'ByteValue', ], 'VolumeUsageUpdatedTime' => [ 'shape' => 'Timestamp', ], 'PercentOfGraphUtilization' => [ 'shape' => 'Percentage', 'deprecated' => true, 'deprecatedMessage' => 'This property is deprecated. Use VolumeUsageInBytes instead.', ], 'PercentOfGraphUtilizationUpdatedTime' => [ 'shape' => 'Timestamp', 'deprecated' => true, 'deprecatedMessage' => 'This property is deprecated. Use VolumeUsageUpdatedTime instead.', ], 'InvitationType' => [ 'shape' => 'InvitationType', ], ], ], 'MemberDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MemberDetail', ], ], 'MemberDisabledReason' => [ 'type' => 'string', 'enum' => [ 'VOLUME_TOO_HIGH', 'VOLUME_UNKNOWN', ], ], 'MemberResultsLimit' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'MemberStatus' => [ 'type' => 'string', 'enum' => [ 'INVITED', 'VERIFICATION_IN_PROGRESS', 'VERIFICATION_FAILED', 'ENABLED', 'ACCEPTED_BUT_DISABLED', ], ], 'PaginationToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'Percentage' => [ 'type' => 'double', ], 'RejectInvitationRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'StartMonitoringMemberRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', 'AccountId', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], 'AccountId' => [ 'shape' => 'AccountId', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'GraphArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, ], 'Timestamp' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UnprocessedAccount' => [ 'type' => 'structure', 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'Reason' => [ 'shape' => 'UnprocessedReason', ], ], ], 'UnprocessedAccountList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnprocessedAccount', ], ], 'UnprocessedReason' => [ 'type' => 'string', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'GraphArn', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateOrganizationConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'GraphArn', ], 'members' => [ 'GraphArn' => [ 'shape' => 'GraphArn', ], 'AutoEnable' => [ 'shape' => 'Boolean', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], ],];
