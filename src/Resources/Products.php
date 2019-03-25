<?php

namespace SevenShores\Hubspot\Resources;

use SevenShores\Hubspot\Exceptions\HubspotException;

class Products extends Resource {

  /**
   * @param array $product Array of product properties.
   * @return mixed
   * @throws HubSpotException
   */
  function create(array $product)
  {
    $endpoint = "https://api.hubapi.com/crm-objects/v1/objects/products";

    $options['json'] = $product;

    return $this->client->request('post', $endpoint, $options);
  }

  /**
   * @param int $id The product id.
   * @param array $product The product properties to update.
   * @return mixed
   */
  function update($id, array $product)
  {
    $endpoint = "https://api.hubapi.com/crm-objects/v1/objects/products/{$id}";

    $options['json'] = $product;

    return $this->client->request('put', $endpoint, $options);
  }

}
