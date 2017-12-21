<?php

namespace ActiveCampaign\Api\V1;

class Message extends ActiveCampaign
{

    public $version;
    public $url_base;
    public $url;
    public $api_key;

    public function __construct($version, $url_base, $url, $api_key)
    {
        $this->version = $version;
        $this->url_base = $url_base;
        $this->url = $url;
        $this->api_key = $api_key;
    }

    public function add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=message_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function deleteList($params)
    {
        $request_url = "{$this->url}&api_action=message_delete_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function delete($params)
    {
        $request_url = "{$this->url}&api_action=message_delete&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=message_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    // phpcs:disable
    public function list_($params)
    {
        // phpcs:enable
        $request_url = "{$this->url}&api_action=message_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function templateAdd($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=message_template_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function templateDeleteList($params)
    {
        $request_url = "{$this->url}&api_action=message_template_delete_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function templateDelete($params)
    {
        $request_url = "{$this->url}&api_action=message_template_delete&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function templateEdit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=message_template_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function templateExport($params)
    {
        $request_url = "{$this->url}&api_action=message_template_export&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function templateImport($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=message_template_import&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function templateList($params)
    {
        $request_url = "{$this->url}&api_action=message_template_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function templateView($params)
    {
        $request_url = "{$this->url}&api_action=message_template_view&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function view($params)
    {
        $request_url = "{$this->url}&api_action=message_view&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }
}
