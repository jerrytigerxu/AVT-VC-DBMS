<?php

function airtable_shortcode( $atts ) {
  $atts = shortcode_atts( array(
        'base_id' => 'appmXtJKw9kGWHR0J', // Default Base ID
        'table_name' => 'Aspheric', // Default table name
        'api_key' => 'patEV5dMy4CeyAbtR.7c11019e0a0eba7041bbc49ad0fd873b20015f8a9f0bc584344d3dac09a75b4f' // Default API key
    ), $atts );
  
    $apiKey = $atts['api_key'];
    $baseId = $atts['base_id'];
    $tableName = $atts['table_name'];
    $url = "https://api.airtable.com/v0/$baseId/$tableName";
  
  $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
  
  	$data = json_decode($response, true);
  
  // Sort records by part number 
    usort($data['records'], function($a, $b) {
        return strcmp($a['fields']['Part Number'], $b['fields']['Part Number']);
    });
  
  // Gather all unique headers
    $allHeaders = array();
    foreach ($data['records'] as $record) {
        if (!empty($record['fields'])) {
            $allHeaders = array_merge($allHeaders, array_keys($record['fields']));
        }
    }
    $allHeaders = array_unique($allHeaders); 
  
  // Start creating the HTML table with the specified class and style
  
  $output = '<table class="table table-striped table-bordered table" style="margin: 0 auto; border: 1px Solid LightGray;">';
    $output .= '<thead><tr>';

    $output .= '<th><h3><b>Part Number</b></h3></th>'; 

    if (($key = array_search('Part Number', $allHeaders)) !== false) {
        unset($allHeaders[$key]);
    }

    // Add remaining headers (bolded)
    foreach ($allHeaders as $header) {
        $output .= '<th><h3><b>' . $header . '</b></h3></th>'; 
    }
  
    $output .= '</tr></thead>';
    $output .= '<tbody>';
  
  // Populate table rows with data
  foreach ($data['records'] as $record) {
        if (empty($record['fields']['Part Number'])) { 
                continue; // Skip this row if it has no fields
            }
        $output .= '<tr>';
        
        $output .= '<td><h3>' . $record['fields']['Part Number'] . '</h3></td>'; 

        // Add remaining cells in the correct order, format price if needed
        foreach ($allHeaders as $header) {
            $cellValue = isset($record['fields'][$header]) ? $record['fields'][$header] : ''; 
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
