<?php

namespace SevenShores\Hubspot\Resources;

use SevenShores\Hubspot\Exceptions\HubspotException;

class LineItems extends Resource {

  /**
   * @param array $line_item Array of line item properties.
   * @return mixed
   * @throws HubSpotException
   */
  function create(array $line_item)
  {
    $endpoint = "https://api.hubapi.com/crm-objects/v1/objects/line_items";

    $options['json'] = $line_item;

    return $this->client->request('post', $endpoint, $options);
  }

  /**
   * @param int $id The line item id.
   * @param array $line_item The line item properties to update.
   * @return mixed
   */
  function update($id, array $line_item)
  {
    $endpoint = "https://api.hubapi.com/crm-objects/v1/objects/line_items/{$id}";

    $options['json'] = $line_item;

    return $this->client->request('put', $endpoint, $options);
  }

}
