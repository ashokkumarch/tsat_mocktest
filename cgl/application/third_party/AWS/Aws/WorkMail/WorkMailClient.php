<?php
namespace Aws\WorkMail;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkMail** service.
 * @method \Aws\Result associateDelegateToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDelegateToResourceAsync(array $args = [])
 * @method \Aws\Result associateMemberToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMemberToGroupAsync(array $args = [])
 * @method \Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \Aws\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \Aws\Result deleteMailboxPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMailboxPermissionsAsync(array $args = [])
 * @method \Aws\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deregisterFromWorkMail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterFromWorkMailAsync(array $args = [])
 * @method \Aws\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \Aws\Result describeOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationAsync(array $args = [])
 * @method \Aws\Result describeResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceAsync(array $args = [])
 * @method \Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \Aws\Result disassociateDelegateFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDelegateFromResourceAsync(array $args = [])
 * @method \Aws\Result disassociateMemberFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberFromGroupAsync(array $args = [])
 * @method \Aws\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \Aws\Result listGroupMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupMembersAsync(array $args = [])
 * @method \Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \Aws\Result listMailboxPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMailboxPermissionsAsync(array $args = [])
 * @method \Aws\Result listOrganizations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationsAsync(array $args = [])
 * @method \Aws\Result listResourceDelegates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDelegatesAsync(array $args = [])
 * @method \Aws\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result putMailboxPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMailboxPermissionsAsync(array $args = [])
 * @method \Aws\Result registerToWorkMail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerToWorkMailAsync(array $args = [])
 * @method \Aws\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Aws\Result updatePrimaryEmailAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePrimaryEmailAddressAsync(array $args = [])
 * @method \Aws\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 */
class WorkMailClient extends AwsClient {}
