<?php

namespace Getsolaris\LaravelAwsSecretsManager\Dtos;

use Spatie\DataTransferObject\Attributes\Strict;

/**
 * @see https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-secretsmanager-2017-10-17.html#deletesecret
 */
#[Strict]
class DeleteSecretDto extends BaseDto
{
    /**
     * @var bool|null (Optional) Specifies that the secret is to be deleted without any recovery window. You cannot use both this parameter and the RecoveryWindowInDays parameter in the same API call.
     */
    public ?bool $ForceDeleteWithoutRecovery;

    /**
     * @var int|null (Optional) Specifies the number of days that Secrets Manager waits before it can delete the secret. You can't use both this parameter and the ForceDeleteWithoutRecovery parameter in the same API call. This value can range from 7 to 30 days. The default value is 30.
     */
    public ?int $RecoveryWindowInDays;

    /**
     * @var string (Required) Specifies the secret that you want to delete. You can specify either the Amazon Resource Name (ARN) or the friendly name of the secret.
     */
    public string $SecretId;
}
