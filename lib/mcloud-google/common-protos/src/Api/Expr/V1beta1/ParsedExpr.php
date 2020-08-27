<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto

namespace MediaCloud\Vendor\Google\Api\Expr\V1beta1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * An expression together with source information as returned by the parser.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.ParsedExpr</code>
 */
class ParsedExpr extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The parsed expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr expr = 2;</code>
     */
    private $expr = null;
    /**
     * The source info derived from input that generated the parsed `expr`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.SourceInfo source_info = 3;</code>
     */
    private $source_info = null;
    /**
     * The syntax version of the source, e.g. `cel1`.
     *
     * Generated from protobuf field <code>string syntax_version = 4;</code>
     */
    private $syntax_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr $expr
     *           The parsed expression.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\SourceInfo $source_info
     *           The source info derived from input that generated the parsed `expr`.
     *     @type string $syntax_version
     *           The syntax version of the source, e.g. `cel1`.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Beta1\Expr::initOnce();
        parent::__construct($data);
    }

    /**
     * The parsed expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr expr = 2;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr
     */
    public function getExpr()
    {
        return $this->expr;
    }

    /**
     * The parsed expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr expr = 2;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr::class);
        $this->expr = $var;

        return $this;
    }

    /**
     * The source info derived from input that generated the parsed `expr`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.SourceInfo source_info = 3;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1beta1\SourceInfo
     */
    public function getSourceInfo()
    {
        return $this->source_info;
    }

    /**
     * The source info derived from input that generated the parsed `expr`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.SourceInfo source_info = 3;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\SourceInfo $var
     * @return $this
     */
    public function setSourceInfo($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\SourceInfo::class);
        $this->source_info = $var;

        return $this;
    }

    /**
     * The syntax version of the source, e.g. `cel1`.
     *
     * Generated from protobuf field <code>string syntax_version = 4;</code>
     * @return string
     */
    public function getSyntaxVersion()
    {
        return $this->syntax_version;
    }

    /**
     * The syntax version of the source, e.g. `cel1`.
     *
     * Generated from protobuf field <code>string syntax_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSyntaxVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->syntax_version = $var;

        return $this;
    }

}
