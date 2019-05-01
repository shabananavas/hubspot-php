<?php

namespace SevenShores\Hubspot\Resources;

class ProductProperties extends Resource
{

  /**
   * Create a product property.
   *
   * Create a property on every product object to store a specific piece of
   * data.
   *
   * @param array $property
   * @return \SevenShores\Hubspot\Http\Response
   */
  function create($property)
  {
    $endpoint = "https://api.hubapi.com/properties/v2/products/properties";

    $options['json'] = $property;

    return $this->client->request('post', $endpoint, $options);
  }

}
