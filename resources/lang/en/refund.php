<?php

return array(
    'singular' => 'Refund',
    'plural' => 'Refund',  
    "refund_requests"=>"Refund Requests",
    "approved_refunds"=>"Approved Refunds",
    "rejected_refunds"=>"Rejected Refunds",
    "refund_configuration"=>"Refund Configuration",
     
 
    'fields' =>
        array(
            'id' => 'Id',
            'refund_amount' => 'Refund Amount',
            'reason' => 'Reason',
            'refund_status' => 'Refund Status',
            'reject_reason' => "Reject Reason", 
             'order' => 'order',
             'refund_days'=> 'Refund days',
             'refund_sticker' => 'Refund sticker',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ),
);
