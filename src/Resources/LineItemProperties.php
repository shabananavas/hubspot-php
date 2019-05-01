<?php

namespace SevenShores\Hubspot\Resources;

class LineItemProperties extends Resource
{

    /**
     * Create a line item property.
     *
     * Create a property on every line item object to store a specific piece of
     * data.
     *
     * @param array $property
     * @return \SevenShores\Hubspot\Http\Response
     */
    function create($property)
    {
        $endpoint = "https://api.hubapi.com/properties/v2/line_items/properties";

        $options['json'] = $property;

        return $this->client->request('post', $endpoint, $options);
    }

}
