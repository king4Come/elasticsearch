<?php
/**
 * User: zach
 * Date: 5/1/13
 * Time: 12:16 PM
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
namespace Elasticsearch\Common\Exceptions;

/**
 * InvalidArgumentException
 * Denote invalid or incorrect argument values
 */
class InvalidArgumentException extends \InvalidArgumentException implements ElasticsearchException
{
}
