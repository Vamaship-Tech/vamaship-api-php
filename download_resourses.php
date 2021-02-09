<?php
$callback = '{"refid":"AP00000000075","documents":{"invoices":["http:\/\/vamaproto.in\/api\/download\/BU00000000075\/Vamaship-Invoice-BU00000000075.pdf"],"labels":["http:\/\/vamaproto.in\/api\/download\/BU00000000075\/Vamship-Label-BU00000000075_7.pdf"],"manifests":["http:\/\/vamaproto.in\/api\/download\/BU00000000075\/Vamship-Manifest-BU00000000075_7.pdf"]},"shipments":[{"order_id":100005533,"supplier_id":7,"reference1":"001","reference2":"refno1","tracking_id":"440210007173"}]}';

$callback = json_decode($callback, true);

