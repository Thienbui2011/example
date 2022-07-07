<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'database_url' => env('FIREBASE_DATABASE_URL', ''),
        'project_id' => env('FIREBASE_PROJECT_ID', 'example-bd691'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', 'a1309b4f70a89e0e848401023112fe15f64345c1'),
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQC3V2n9SnJ/cOAv\nukLROT9dNc51MBHPnMTDcbU97s7wbaqZxkvgmxfEA2A1mX1V2yQh2MIft8CMxt6F\naNJWfx4CgSV73xPEqTB2ljxEvr9Q4viGFcLBoV1zfnasOj4GWkFdB/lsiRvPhAKQ\nPHoSqm0KKYl/KDg5XAuMLlGDHe70LNl4eSEkB+F/WmaeR6HNFiuIeBb6vkcxuWW1\n7dtQiAn+MHunx5u3Wk8hPX26Ou4H9g2xM8RuKBJohU4IZqJW0/oGk51AxfBHpHsb\ns3QW7DcWqA937wgWlKFbwhzGpCSNzaxl61iTJlHffGm1/jFPg1vM1nm8+j/I4Y5p\n4U85a8gPAgMBAAECggEAA04IExDBz5pGmur4mVzhei9Qxrv/FjGf5QX/sQYaT4B/\n5WsK+G7TQYKYvAlFlm6aJXdgHcI/g59yE2WNpRGAMPtdpEX5IpUKJ+5oAl/jLZ9p\nwMD+VGSG6AtiMuiPMFN1f3/NTIThg3QVt76J/3F4VbPko+4i//sGGkNwz17oF8P6\nDFyNichEesWjY5Ato5+fqBf1JbFtIo3JXXw26Jo6NxdIuPeZHMSjwp0/8eDloxNO\npnVe2MESdOtf8fgmKXRw8LIjMTseSnQuKCnX1SRAbL2OWcly/M6CLvAbyQ8rdHPH\nQ8VeTEsXLc8FA1txnPbp2/RSSyP9pBjUpDPg9IOYwQKBgQDf2mTcwr3jX+V9/vpf\n+cid3qvtMcKBI40iSEPjiEznyvdj5KIGGtSWnZujE3CBB1AzSreuMVV/OzpxkInU\nmJ0DJ2Gnww4HR3hy3O8b/dRRMCYmToGeh1Sj7uzzC/vJ9e02xcz0pTKvCyjf09jO\nxXP9XHXD8oyK4n3D5EMIaOVe3QKBgQDRq6xqTYnvmFolnfNs65bPmkdFdFgy/Vv0\ntLCHNTQqlSMsgu7QL8pfrsEVNMQskzlqfLqA+Tp5m48nAxxXgiEQV04CoVXGRrcr\nId+BWO49hdyLsB3JSZSUOg+EM/MT4pbXYnAALKO23Dqn/vDgbaE/xJB5zthx2NoY\nmbs1ZKGV2wKBgHORwh8DX5vDB6179XGVeNCghGyqEvwvCY9YdcxDs0i8TerBwDCc\nq4KzDgYsZBoJV4uTmK8TA0vznSHCeJZM0Esvishc+KIjcPkEPWJbMsFTtW5ze5IH\n1lfoY2a7mhvTnst3ZXAs1bTvcwPT0Iw3/sEgeiBW2d5ePoXjFASEe171AoGAKkws\nsyFDU19zyCTuJ6n7OZRRDnTjGh48f8g32H7mMDT37JHZZYxOkjDp6MJFVQy6R340\nDbK5ljDIl0EsZYbt7qL+LM+pQx+e8geaVDjBjw3DKTb1O1cpryFrYess/XT3oynL\nmG1o9YnGF3/5zfyvy/J2huwwg/8QOGhC+Ql9A4MCgYAKhkwDDCC0wtvHCNuhTYEJ\nlCUvJpV67qzsHRrdwzUW0DP5914ysDPeqw1XE0NNjquWnO8E7TnMDwBXDP7TCScV\nX5pkHcYL6ragia8EZusaZjhklq4h4GaFuJHEP0H9WpV+ua1VJuimm6ps18WpP5+7\n6hYYMkCcUpy6QnCBYPc4+w==\n-----END PRIVATE KEY-----\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-v2ffy@example-bd691.iam.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '109594774912516349851'),
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-v2ffy%40example-bd691.iam.gserviceaccount.com'),
    ]

];