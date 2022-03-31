<?php
namespace Aws\Backup;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Backup** service.
 * @method \Aws\Result createBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupPlanAsync(array $args = [])
 * @method \Aws\Result createBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupSelectionAsync(array $args = [])
 * @method \Aws\Result createBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupVaultAsync(array $args = [])
 * @method \Aws\Result deleteBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupPlanAsync(array $args = [])
 * @method \Aws\Result deleteBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupSelectionAsync(array $args = [])
 * @method \Aws\Result deleteBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAsync(array $args = [])
 * @method \Aws\Result deleteBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAccessPolicyAsync(array $args = [])
 * @method \Aws\Result deleteBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultNotificationsAsync(array $args = [])
 * @method \Aws\Result deleteRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecoveryPointAsync(array $args = [])
 * @method \Aws\Result describeBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupJobAsync(array $args = [])
 * @method \Aws\Result describeBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupVaultAsync(array $args = [])
 * @method \Aws\Result describeProtectedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectedResourceAsync(array $args = [])
 * @method \Aws\Result describeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecoveryPointAsync(array $args = [])
 * @method \Aws\Result describeRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRestoreJobAsync(array $args = [])
 * @method \Aws\Result exportBackupPlanTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBackupPlanTemplateAsync(array $args = [])
 * @method \Aws\Result getBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanAsync(array $args = [])
 * @method \Aws\Result getBackupPlanFromJSON(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromJSONAsync(array $args = [])
 * @method \Aws\Result getBackupPlanFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromTemplateAsync(array $args = [])
 * @method \Aws\Result getBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupSelectionAsync(array $args = [])
 * @method \Aws\Result getBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultAccessPolicyAsync(array $args = [])
 * @method \Aws\Result getBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultNotificationsAsync(array $args = [])
 * @method \Aws\Result getRecoveryPointRestoreMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecoveryPointRestoreMetadataAsync(array $args = [])
 * @method \Aws\Result getSupportedResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSupportedResourceTypesAsync(array $args = [])
 * @method \Aws\Result listBackupJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupJobsAsync(array $args = [])
 * @method \Aws\Result listBackupPlanTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanTemplatesAsync(array $args = [])
 * @method \Aws\Result listBackupPlanVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanVersionsAsync(array $args = [])
 * @method \Aws\Result listBackupPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlansAsync(array $args = [])
 * @method \Aws\Result listBackupSelections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupSelectionsAsync(array $args = [])
 * @method \Aws\Result listBackupVaults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupVaultsAsync(array $args = [])
 * @method \Aws\Result listProtectedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedResourcesAsync(array $args = [])
 * @method \Aws\Result listRecoveryPointsByBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByBackupVaultAsync(array $args = [])
 * @method \Aws\Result listRecoveryPointsByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByResourceAsync(array $args = [])
 * @method \Aws\Result listRestoreJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobsAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result putBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultAccessPolicyAsync(array $args = [])
 * @method \Aws\Result putBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultNotificationsAsync(array $args = [])
 * @method \Aws\Result startBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBackupJobAsync(array $args = [])
 * @method \Aws\Result startRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRestoreJobAsync(array $args = [])
 * @method \Aws\Result stopBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBackupJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBackupPlanAsync(array $args = [])
 * @method \Aws\Result updateRecoveryPointLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecoveryPointLifecycleAsync(array $args = [])
 */
class BackupClient extends AwsClient {}
