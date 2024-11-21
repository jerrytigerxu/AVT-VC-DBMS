# Shortcode Sandbox

```
function fetch_aspheric_lenses( $atts ) {
      $apiKey = 'patD3Y6XZgfqKZPDZ.0efd5af39ddcc9bd64e229c36df3f44deeda8f3d09f92636372944e9f5d86198';
      $baseId = 'appmXtJKw9kGWHR0J';
      $tableName = 'Stock - Aspheric Lenses';

      $output = '';
      $url = "https://api.airtable.com/v0/{$baseId}/{$tableName}";
      $headers = array(
      'Authorization' => 'Bearer ' . $apiKey,
      );

      $ch = curl_init();
      curl_setopt( $ch, CURLOPT_URL, $url );
      curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	  $response = curl_exec( $ch );

      if ( curl_errno( $ch ) ) {
        $output .= 'Error:' . curl_error( $ch );
      } else {
        $data = json_decode( $response, true );


        /* Start building the table */
        $output .= '<table style="border-collapse: collapse; width: 100%;">';
        $output .= '<thead>';
        $output .= '<tr>';

        /* Dynamically get field names for table headers */
        if (isset($data['records'][0]['fields'])) {
          foreach (array_keys($data['records'][0]['fields']) as $fieldName) {
            $output .= '<th style="border: 1px solid black; padding: 8px;">' . $fieldName . '</th>';
          }
        }
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';

        /* Fill out the data for the records (rows x columns) */
        foreach ( $data['records'] as $record ) {
          $output .= '<tr>';
          foreach ($record['fields'] as $fieldValue) {
            $output .= '<td style="border: 1px solid black; padding: 8px;">' . $fieldValue . '</td>';
          }
          $output .= '</tr>';
        }
        $output .= '</tbody>';
        $output .= '</table>';
    }
    curl_close( $ch );
    return $output;
    }
    add_shortcode( 'aspheric_lenses', 'fetch_aspheric_lenses' );


```
