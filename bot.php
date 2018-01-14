<?php
$access_token = 'NQsFW+40cEdbzEEml2POkaZSxtP+ayedbCN1hirZGYX6U4eIPQvp+zKNHGcFcTD42pWU3JHwJAURi9Bkns3s8bOFyQ0uqbgqcB82QClbmmxTX1cQ1ubV39txbS5htzHce4N4uqxdSfO78gfYIFR0QgdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
{
	"events": [
		{
			"type": "message",
			"replyToken": "ค่า replyToken ของเราที่สนทนากับ bot",
			"source": {
				"userId": "ไอดีของ user line ของเรา",
				"type": "user"
			},
			"timestamp": 1510665495557,
			"message": {
				"type": "text",
				"id": "ไอดีของข้อความ",
				"text": "ข้อความที่เราส่งไป"
			}
		}
	]
};
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
	}
}
echo "OK";
