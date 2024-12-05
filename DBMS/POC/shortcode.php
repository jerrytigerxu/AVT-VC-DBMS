<?php

function airtable_shortcode( $atts ) {
  // 1. Handling of the shortcode attributes (including table_name)
  $atts = shortcode_atts( array(
        'base_id' => 'appmXtJKw9kGWHR0J', // Default Base ID
        'table_name' => 'Aspheric', // Default table name
        'api_key' => 'patEV5dMy4CeyAbtR.7c11019e0a0eba7041bbc49ad0fd873b20015f8a9f0bc584344d3dac09a75b4f', // Default API key
        'column_names' => '' // Attribute for column names
    ), $atts );
  
    $apiKey = $atts['api_key'];
    $baseId = $atts['base_id'];
    $tableName = $atts['table_name'];
    $url = "https://api.airtable.com/v0/$baseId/$tableName";

  // 2. Data fetching from Airtable
  $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

  // ******************  "$data" now contains a PHP array that was converted from the JSON data  **************
  $data = json_decode($response, true);
  
  // 3. Sort records by part number 
  usort($data['records'], function($a, $b) {
      return strcmp($a['fields']['Part Number'], $b['fields']['Part Number']);
  });
  
  // 4. Determine column names (unique headers or from direct attribute)
  $columnNames = array();
  if (!empty($atts['column_names'])) { // If column_names is provided
      $columnNames = explode(',', $atts['column_names']);
      $columnNames = array_map('trim', $columnNames);
   } else {
    // Gather all unique headers
    foreach ($data['records'] as $record) {
      if (!empty($record['fields'])) {
        $columnNames = array_merge($columnNames, array_keys($record['fields']));
      }
    }
    $columnNames = array_unique($columnNames);
  }
  
  
  // 5.  Build the HTML Table (using determined column names)
  $output = '<table class="table table-striped table-bordered table" style="margin: 0 auto; border: 1px Solid LightGray;">';
  $output .= '<thead><tr>';

  // Add column headers (bolded) from $columnNames
  foreach ($columnNames as $columnName) {
    $output .= '<th><h3><b>' . $columnName . '</b></h3></th>'; 
  }

  $output .= '</tr></thead>';
  $output .= '<tbody>';

  foreach ($data['records'] as $record) {
    if (empty($record['fields']['Part Number'])) { 
      continue;
    }
    $output .= '<tr>';

    // Add table cells based on $columnNames
    foreach ($columnNames as $columnName) {
      $cellValue = isset($record['fields'][$columnName]) ? $record['fields'][$columnName] : ''; 
      if (preg_match('/\*\*\$([\d.]+)\*\*/', $cellValue, $matches)) { 
        $cellValue = '<b>$' . $matches[1] . '</b>';
      }
      $output .= '<td><h3>' . $cellValue . '</h3></td>'; 
    }
    $output .= '</tr>';
  }

  $output .= '</tbody></table>';
  return $output;
}
