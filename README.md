Chef
====

The Chef Server API is used to provide access to objects on the Chef Server, including nodes, environments, roles, cookbooks (and cookbook versions), and to manage an API client list and the associated RSA public key-pairs.

*This is a generic library and has additional support for the CodeIgniter framework.*

Installation
------------

Place the files in your application directory.

Usage
-----
Load Library:

	//This will create a chef object useing the settings in the config file
	$this->load->library("chef");

	//Or create an object with custom settings:
	$chef = new Chef($server, $client, $key, $version);    
    
    // API request
    $response = $this->chef->api($endpoint, $method, $data);

See http://docs.opscode.com/api_chef_server.html for all available endpoints.

Examples
--------

Get nodes:

    $nodes = $this->chef->get('/nodes');

Create a data bag:

    $bag = new stdClass;
    $bag->name = "test";
    
    $resp = $this->chef->post('/data', $bag);

Update a node:

    $node = $this->chef->get('/nodes/webserver1');
    $node->attributes->type = "webserver";
    
    $this->chef->put('/nodes/webserver1', $node);

Delete a data bag:

    $this->chef->delete('/data/test/item');
