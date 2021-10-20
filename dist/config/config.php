<?php
/**
 * TransmitMail設定ファイル PHP版
 */

// 管理者宛_メールアドレス
$config['to_email'] = 'webmaster@grow-group.jp';

// 管理者宛_メール件名
$config['to_subject'] = '［ロケなび！ポータルサイト］お問い合わせが届きました';

// 自動返信を有効に
$config['auto_reply'] = true;

// 自動返信メール_件名
$config['auto_reply_subject'] = '［ロケなび！ポータルサイト］お問い合わせありがとうございます';

// 自動返信メール_送信者名
$config['auto_reply_name'] = '株式会社地域活性プランニング';

// 自動返信メール_ユーザー入力メールアドレスの input name 値
$config['auto_reply_email'] = 'メールアドレス';

$config['file'] = true;
$config['file_allow_extension'] = "jpg,jpeg,gif,png,pdf,xlsx,docx,doc,xls";
$config['file_max_size'] = 10120000;
$config['file_retention_period'] = 1800;

// ## SMTP設定 ##
// $config['smtp'] = true;
// $config['smtp_host'] = 'smtp.server.ne.jp'; // SMTPサーバのFQDN
// $config['smtp_port'] = 587; // SSLの場合 465, Submissionを考慮しない場合 25
// $config['smtp_auth'] = true; // true で固定
// $config['smtp_secure'] = "ssl"; // ssl または tls
// $config['smtp_user'] = "info@grow-group.jp"; // アカウント
// $config['smtp_password'] = "***********"; // 上記メールアドレスのアカウント
