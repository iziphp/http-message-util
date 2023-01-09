<?php

declare(strict_types=1);

use PhpStandard\Http\Message\StatusCodeEnum;
use PHPUnit\Framework\TestCase;

class StatusCodeEnumTest extends TestCase
{
    /** @test */
    public function assertGetPhase(): void
    {
        foreach (StatusCodeEnum::cases() as $enum) {
            match ($enum) {
                StatusCodeEnum::CONTINUE => $this->assertEquals('Continue', $enum->getPhrase()),
                StatusCodeEnum::SWITCHING_PROTOCOLS => $this->assertEquals('Switching Protocols', $enum->getPhrase()),
                StatusCodeEnum::PROCESSING => $this->assertEquals('Processing', $enum->getPhrase()),
                StatusCodeEnum::EARLY_HINTS => $this->assertEquals('Early Hints', $enum->getPhrase()),
                StatusCodeEnum::OK => $this->assertEquals('OK', $enum->getPhrase()),
                StatusCodeEnum::CREATED => $this->assertEquals('Created', $enum->getPhrase()),
                StatusCodeEnum::ACCEPTED => $this->assertEquals('Accepted', $enum->getPhrase()),
                StatusCodeEnum::NON_AUTHORITATIVE_INFORMATION => $this->assertEquals('Non-Authoritative Information', $enum->getPhrase()),
                StatusCodeEnum::NO_CONTENT => $this->assertEquals('No Content', $enum->getPhrase()),
                StatusCodeEnum::RESET_CONTENT => $this->assertEquals('Reset Content', $enum->getPhrase()),
                StatusCodeEnum::PARTIAL_CONTENT => $this->assertEquals('Partial Content', $enum->getPhrase()),
                StatusCodeEnum::MULTI_STATUS => $this->assertEquals('Multi-Status', $enum->getPhrase()),
                StatusCodeEnum::ALREADY_REPORTED => $this->assertEquals('Already Reported', $enum->getPhrase()),
                StatusCodeEnum::IM_USED => $this->assertEquals('IM Used', $enum->getPhrase()),
                StatusCodeEnum::MULTIPLE_CHOICES => $this->assertEquals('Multiple Choices', $enum->getPhrase()),
                StatusCodeEnum::MOVED_PERMANENTLY => $this->assertEquals('Moved Permanently', $enum->getPhrase()),
                StatusCodeEnum::FOUND => $this->assertEquals('Found', $enum->getPhrase()),
                StatusCodeEnum::SEE_OTHER => $this->assertEquals('See Other', $enum->getPhrase()),
                StatusCodeEnum::NOT_MODIFIED => $this->assertEquals('Not Modified', $enum->getPhrase()),
                StatusCodeEnum::USE_PROXY => $this->assertEquals('Use Proxy', $enum->getPhrase()),
                StatusCodeEnum::RESERVED => $this->assertEquals('Reserved', $enum->getPhrase()),
                StatusCodeEnum::TEMPORARY_REDIRECT => $this->assertEquals('Temporary Redirect', $enum->getPhrase()),
                StatusCodeEnum::PERMANENT_REDIRECT => $this->assertEquals('Permanent Redirect', $enum->getPhrase()),
                StatusCodeEnum::BAD_REQUEST => $this->assertEquals('Bad Request', $enum->getPhrase()),
                StatusCodeEnum::UNAUTHORIZED => $this->assertEquals('Unauthorized', $enum->getPhrase()),
                StatusCodeEnum::PAYMENT_REQUIRED => $this->assertEquals('Payment Required', $enum->getPhrase()),
                StatusCodeEnum::FORBIDDEN => $this->assertEquals('Forbidden', $enum->getPhrase()),
                StatusCodeEnum::NOT_FOUND => $this->assertEquals('Not Found', $enum->getPhrase()),
                StatusCodeEnum::METHOD_NOT_ALLOWED => $this->assertEquals('Method Not Allowed', $enum->getPhrase()),
                StatusCodeEnum::NOT_ACCEPTABLE => $this->assertEquals('Not Acceptable', $enum->getPhrase()),
                StatusCodeEnum::PROXY_AUTHENTICATION_REQUIRED => $this->assertEquals('Proxy Authentication Required', $enum->getPhrase()),
                StatusCodeEnum::REQUEST_TIMEOUT => $this->assertEquals('Request Timeout', $enum->getPhrase()),
                StatusCodeEnum::CONFLICT => $this->assertEquals('Conflict', $enum->getPhrase()),
                StatusCodeEnum::GONE => $this->assertEquals('Gone', $enum->getPhrase()),
                StatusCodeEnum::LENGTH_REQUIRED => $this->assertEquals('Length Required', $enum->getPhrase()),
                StatusCodeEnum::PRECONDITION_FAILED => $this->assertEquals('Precondition Failed', $enum->getPhrase()),
                StatusCodeEnum::PAYLOAD_TOO_LARGE => $this->assertEquals('Payload Too Large', $enum->getPhrase()),
                StatusCodeEnum::URI_TOO_LONG => $this->assertEquals('URI Too Long', $enum->getPhrase()),
                StatusCodeEnum::UNSUPPORTED_MEDIA_TYPE => $this->assertEquals('Unsupported Media Type', $enum->getPhrase()),
                StatusCodeEnum::RANGE_NOT_SATISFIABLE => $this->assertEquals('Range Not Satisfiable', $enum->getPhrase()),
                StatusCodeEnum::EXPECTATION_FAILED => $this->assertEquals('Expectation Failed', $enum->getPhrase()),
                StatusCodeEnum::IM_A_TEAPOT => $this->assertEquals('I\'m a teapot', $enum->getPhrase()),
                StatusCodeEnum::MISDIRECTED_REQUEST => $this->assertEquals('Misdirected Request', $enum->getPhrase()),
                StatusCodeEnum::UNPROCESSABLE_ENTITY => $this->assertEquals('Unprocessable Entity', $enum->getPhrase()),
                StatusCodeEnum::LOCKED => $this->assertEquals('Locked', $enum->getPhrase()),
                StatusCodeEnum::FAILED_DEPENDENCY => $this->assertEquals('Failed Dependency', $enum->getPhrase()),
                StatusCodeEnum::TOO_EARLY => $this->assertEquals('Too Early', $enum->getPhrase()),
                StatusCodeEnum::UPGRADE_REQUIRED => $this->assertEquals('Upgrade Required', $enum->getPhrase()),
                StatusCodeEnum::PRECONDITION_REQUIRED => $this->assertEquals('Precondition Required', $enum->getPhrase()),
                StatusCodeEnum::TOO_MANY_REQUESTS => $this->assertEquals('Too Many Requests', $enum->getPhrase()),
                StatusCodeEnum::REQUEST_HEADER_FIELDS_TOO_LARGE => $this->assertEquals('Request Header Fields Too Large', $enum->getPhrase()),
                StatusCodeEnum::UNAVAILABLE_FOR_LEGAL_REASONS => $this->assertEquals('Unavailable For Legal Reasons', $enum->getPhrase()),
                StatusCodeEnum::INTERNAL_SERVER_ERROR => $this->assertEquals('Internal Server Error', $enum->getPhrase()),
                StatusCodeEnum::NOT_IMPLEMENTED => $this->assertEquals('Not Implemented', $enum->getPhrase()),
                StatusCodeEnum::BAD_GATEWAY => $this->assertEquals('Bad Gateway', $enum->getPhrase()),
                StatusCodeEnum::SERVICE_UNAVAILABLE => $this->assertEquals('Service Unavailable', $enum->getPhrase()),
                StatusCodeEnum::GATEWAY_TIMEOUT => $this->assertEquals('Gateway Timeout', $enum->getPhrase()),
                StatusCodeEnum::HTTP_VERSION_NOT_SUPPORTED => $this->assertEquals('HTTP Version Not Supported', $enum->getPhrase()),
                StatusCodeEnum::VARIANT_ALSO_NEGOTIATES => $this->assertEquals('Variant Also Negotiates', $enum->getPhrase()),
                StatusCodeEnum::INSUFFICIENT_STORAGE => $this->assertEquals('Insufficient Storage', $enum->getPhrase()),
                StatusCodeEnum::LOOP_DETECTED => $this->assertEquals('Loop Detected', $enum->getPhrase()),
                StatusCodeEnum::NOT_EXTENDED => $this->assertEquals('Not Extended', $enum->getPhrase()),
                StatusCodeEnum::NETWORK_AUTHENTICATION_REQUIRED => $this->assertEquals('Network Authentication Required', $enum->getPhrase()),

                default => throw new \Exception('Unknown status code: ' . $enum->name),
            };
        }
    }
}
