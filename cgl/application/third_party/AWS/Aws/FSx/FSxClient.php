<?php
namespace Aws\FSx;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon FSx** service.
 * @method \Aws\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \Aws\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \Aws\Result createFileSystemFromBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemFromBackupAsync(array $args = [])
 * @method \Aws\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \Aws\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \Aws\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Aws\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFileSystemAsync(array $args = [])
 */
class FSxClient extends AwsClient {}
