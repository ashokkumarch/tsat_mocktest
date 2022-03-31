<?php
namespace Aws\SecurityHub;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS SecurityHub** service.
 * @method \Aws\Result acceptInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptInvitationAsync(array $args = [])
 * @method \Aws\Result batchDisableStandards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisableStandardsAsync(array $args = [])
 * @method \Aws\Result batchEnableStandards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchEnableStandardsAsync(array $args = [])
 * @method \Aws\Result batchImportFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchImportFindingsAsync(array $args = [])
 * @method \Aws\Result createInsight(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInsightAsync(array $args = [])
 * @method \Aws\Result createMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMembersAsync(array $args = [])
 * @method \Aws\Result declineInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise declineInvitationsAsync(array $args = [])
 * @method \Aws\Result deleteInsight(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInsightAsync(array $args = [])
 * @method \Aws\Result deleteInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInvitationsAsync(array $args = [])
 * @method \Aws\Result deleteMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMembersAsync(array $args = [])
 * @method \Aws\Result disableImportFindingsForProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableImportFindingsForProductAsync(array $args = [])
 * @method \Aws\Result disableSecurityHub(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSecurityHubAsync(array $args = [])
 * @method \Aws\Result disassociateFromMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFromMasterAccountAsync(array $args = [])
 * @method \Aws\Result disassociateMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMembersAsync(array $args = [])
 * @method \Aws\Result enableImportFindingsForProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableImportFindingsForProductAsync(array $args = [])
 * @method \Aws\Result enableSecurityHub(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSecurityHubAsync(array $args = [])
 * @method \Aws\Result getEnabledStandards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnabledStandardsAsync(array $args = [])
 * @method \Aws\Result getFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \Aws\Result getInsightResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInsightResultsAsync(array $args = [])
 * @method \Aws\Result getInsights(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInsightsAsync(array $args = [])
 * @method \Aws\Result getInvitationsCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvitationsCountAsync(array $args = [])
 * @method \Aws\Result getMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMasterAccountAsync(array $args = [])
 * @method \Aws\Result getMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMembersAsync(array $args = [])
 * @method \Aws\Result inviteMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteMembersAsync(array $args = [])
 * @method \Aws\Result listEnabledProductsForImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnabledProductsForImportAsync(array $args = [])
 * @method \Aws\Result listInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInvitationsAsync(array $args = [])
 * @method \Aws\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \Aws\Result updateFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFindingsAsync(array $args = [])
 * @method \Aws\Result updateInsight(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInsightAsync(array $args = [])
 */
class SecurityHubClient extends AwsClient {}
