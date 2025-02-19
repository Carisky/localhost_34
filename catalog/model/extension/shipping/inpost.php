<?php
/**
 *  Copyright (c) 2023 Noir
 *  All Rights Reserved
 */

class ModelExtensionShippingInpost extends Model {

    public function getQuote( $address )
    {
        $this->load->language('extension/shipping/inpost');
		
		$quote_data = array();
		
		$quote_data['courier'] = [
			'code'         => 'inpost.courier',
			'title'        => $this->language->get('text_description_courier'),
			'cost'         => $this->config->get('shipping_inpost_total_courier'),
			'tax_class_id' => $this->config->get('shipping_inpost_tax_class_id'),
			'text'         => $this->currency->format($this->tax->calculate($this->config->get('shipping_inpost_total_courier'), $this->config->get('shipping_inpost_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
		];
		
		if(!empty($this->session->data['shipping_method']) and $this->session->data['shipping_method']['code'] == 'inpost.point' and isset($this->session->data['shipping_method']['ID'])) {
			$quote_data['point'] = $this->session->data['shipping_method'];
		}
		
		if(empty($quote_data['point'])) {
			$query = '';
			if(isset($address['city']) or isset($address['postcode'])) {
				$query = $this->db->query("
					SELECT * FROM ".DB_PREFIX."shipping_inpost 
					WHERE CITY = '".ucfirst(strtolower($address['city']))."' OR POST_CODE = '".$address['postcode']."' 
					ORDER BY CITY ASC, STREET ASC LIMIT 1
				");
			}
			if(!$query or !$query->num_rows) {
				$query = $this->db->query("SELECT * FROM ".DB_PREFIX."shipping_inpost ORDER BY CITY ASC, STREET ASC LIMIT 1");
			}
			$quote_data['point'] = $this->buildQuote($query->rows[0]);
		}
        
		$method_data = [
			'code'       => 'inpost',
			'title'      => $this->language->get('text_title'),
			'quote'      => $quote_data,
			'sort_order' => $this->config->get('shipping_inpost_sort_order'),
			'error'      => false
		];

		return $method_data;
    }
	
	public function buildQuote($point)
	{
		$this->load->language('extension/shipping/inpost');
		$point_name = $point['ID'].' - '.$point['STREET'].' '.$point['BUILDING_NUMBER'].', '.$point['POST_CODE'].' '.$point['CITY'];
		$cost = $this->currency->format($this->tax->calculate($this->config->get('shipping_inpost_total'), $this->config->get('shipping_inpost_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency']);
		$html = '<a href="javascript:;" class="btn-map df aic" data-modal-map>'.$point_name.
			'<svg><use xlink:href="/catalog/view/theme/noir/img/sprite.svg#trigger"></use></svg>'.
			'</a><div id="inpostModalMap" class="modal fade" tabindex="-1" role="dialog" style="display:none">'.
			//'<div id="inpost-google-map"></div>'.
			'
            <div class="modal-content" style="height: 100%">
                <div class="modal-body" style="height: 100%; min-height: 500px;">
                    <inpost-geowidget id="geoWidget" onpoint="afterPointSelected" token="eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJzQlpXVzFNZzVlQnpDYU1XU3JvTlBjRWFveFpXcW9Ua2FuZVB3X291LWxvIn0.eyJleHAiOjIwMTM1NzA1OTcsImlhdCI6MTY5ODIxMDU5NywianRpIjoiZjFhZGIzMTMtZjMzYy00ZmNjLTlkMWMtYTAwOWU0MjAzNDVjIiwiaXNzIjoiaHR0cHM6Ly9sb2dpbi5pbnBvc3QucGwvYXV0aC9yZWFsbXMvZXh0ZXJuYWwiLCJzdWIiOiJmOjEyNDc1MDUxLTFjMDMtNGU1OS1iYTBjLTJiNDU2OTVlZjUzNTpiNmY4cEM5ZXNpS1l5YzZpOS1tWHV2eXd6M2dLOURBb0xBOS1SX0t4dXVVIiwidHlwIjoiQmVhcmVyIiwiYXpwIjoic2hpcHgiLCJzZXNzaW9uX3N0YXRlIjoiMjMxYzI4NjgtNzA0Ny00OTQ2LWJjOTktYjNkNjg2ZTkwNWU3Iiwic2NvcGUiOiJvcGVuaWQgYXBpOmFwaXBvaW50cyIsInNpZCI6IjIzMWMyODY4LTcwNDctNDk0Ni1iYzk5LWIzZDY4NmU5MDVlNyIsImFsbG93ZWRfcmVmZXJyZXJzIjoidGhlamFyLmNvbS5wbCIsInV1aWQiOiJlMTY0ZDg5Zi1kMmYxLTQyZDAtODcxMy05ZTAyYzUyNDllNmYifQ.pI2gaWrRkNXzr44Js8UWEqZzKZ-UpvR713S2lN8FZcJsyGSQJc8ImhERl4hOX77YsQG91fJ6MygYG4PtUc3bXnnlOcbGPOEgaQscwQC8jOEnY5fG-ilda_W_ENA48g1C0scXvJnFWhnextxDf1xKSZooKiz35j0UvFNeBN9LTSKE3G2RsunuNvRaJ0J9GtQm1uAfozTB7aRSpSdMeDploFGo6aFrMCohTNW84mX7rezDan8kcZw_wkWOOfpKDkE44TVPa-iwFnj6L6BA0ziFVGDkHWxxaTRCcsHiXCUam5uiYgxOZzbQQtsW8UgH4MgKe7NGS1SeDQTB0_VHi9BOiA" language="pl" config="parcelCollect"></inpost-geowidget>
                    <script>
                    function afterPointSelected(point) { btnSelectPoint(point.name, point.name + " - " + point.address.line1 + ", " + point.address.line2);} 
                    </script>
                </div>
            </div>
            '.
			'</div>';
		
		return [
			'code'  => 'inpost.point',
			'title' => $this->language->get('text_title'),
			'cost'  => $this->config->get('shipping_inpost_total'),
			'tax_class_id' => $this->config->get('shipping_inpost_tax_class_id'),
			'text'  => $cost,
			'point_name' => $point_name,
			'ID' => $point['ID'],
			'html' => $html
		];
	}

    public function getJson($data = null)
    {
        if( !empty( $data['postcode'] )) {
            $q[] = "POST_CODE='" . $data['postcode'] . "'";
        }
        if( !empty( $data['id'] )) {
            $q[] = "ID='" . $data['id'] . "'";
        }

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "shipping_inpost" . (!empty( $q ) ? " WHERE " . implode( " AND " , $q ) : ""));
        if ($query->num_rows) {
            foreach( $query->rows as $item )
            {
                $map[] = [
                    'id' => $item['ID'],
                    'description' => $item['LOCATION_DESCRIPTION'],
                    'street' => $item['STREET'] . ' ' . $item['BUILDING_NUMBER'],
                    'postcode' => $item['POST_CODE'],
                    'city' => $item['CITY'],
                    'state' => $item['PROVINCE'],
                    'lat' => $item['LATITUDE'],
                    'lng' => $item['LONGITUDE']
                ];

                $inpost_id = 'inpost_' . $item['ID'];
                $quote_data[$inpost_id] = array(
                    'code'         => 'inpost.' . $inpost_id,
                    'title'        => '(' . $item['ID'] . ') - ' . $item['STREET'] . ' ' . $item['BUILDING_NUMBER'] . ', ' . $item['CITY'] . '" class="hidden"',
                    'cost'         => $this->config->get('shipping_inpost_total'),
                    'tax_class_id' => $this->config->get('shipping_inpost_tax_class_id'),
                    'text'         => $this->currency->format($this->tax->calculate($this->config->get('shipping_inpost_total'), $this->config->get('shipping_inpost_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
                );
            }
        }

        return $map;
    }
	
	public function getPoint($id) 
	{
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "shipping_inpost WHERE ID = '".$id."'");
		if($query->num_rows) return $query->row;
		return array();
	}

    public function generateQuote( $post )
    {
        $this->load->language('extension/shipping/inpost');

        if( empty( $post['id'] )) {
            $json = array('error' => true, 'msg' => 'Brak parametru POST id');
        } else {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "shipping_inpost WHERE ID='" . $post['id'] . "'");
            if ($query->num_rows) {
                foreach( $query->rows as $item )
                {
                    $inpost_id = 'inpost_' . $item['ID'];
                    $quote_data[$inpost_id] = array(
                        'code'         => 'inpost.' . $inpost_id,
                        'title'        => '(' . $item['ID'] . ') - ' . $item['STREET'] . ' ' . $item['BUILDING_NUMBER'] . ', ' . $item['CITY'],
                        'cost'         => $this->config->get('shipping_inpost_total'),
                        'tax_class_id' => $this->config->get('shipping_inpost_tax_class_id'),
                        'text'         => $this->currency->format($this->tax->calculate($this->config->get('shipping_inpost_total'), $this->config->get('shipping_inpost_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
                    );
                }

                //file_put_contents( DIR_APPLICATION . 'inpost.log' , print_r($this->session->data, true));
                $this->session->data['shipping_methods']['inpost'] = [
                    'title' => 'Paczkomaty Inpost',
                    'quote' => $quote_data,
                    'sort_order' => 0,
                    'error' => ''

                ];
                //file_put_contents( DIR_APPLICATION . 'inpost.log' , print_r($this->session->data['shipping_methods'], true));

                $json = array('success' => true);
            }
        }

        return json_encode( $json );
    }
}
