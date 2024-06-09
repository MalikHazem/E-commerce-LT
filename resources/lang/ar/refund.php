<?php

return array(
    'singular' => 'استرداد',
    'plural' => 'استرداد',  
    "refund_requests"=>"طلبات الاسترداد",
    "approved_refunds"=>"المبالغ المستردة المعتمدة",
    "rejected_refunds"=>"استرداد المبالغ المستردة",
    "refund_configuration"=>"اعدادت رد الأموال",
     
 
    'fields' =>
        array(
            'id' => 'الرقم',
            'refund_amount' => 'المبلغ المسترد',
            'reason' => 'السبب',
            'refund_status' => 'حالة الاسترداد',
            'reject_reason' => "رفض السبب", 
             'order' => 'الطلب',
             'refund_days'=> 'أيام الاسترداد',
             'refund_sticker' => 'ملصق استرداد',
            'created_at' => 'تم الانشاء',
            'updated_at' => 'تم التحديث',
        ),
);
