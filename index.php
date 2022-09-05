<?php

require_once 'Token.php';

$token = new Token;

// bila ingin membuat token di hash maka tambahkan true di akhir, contok nya
// $token->generate(type, panjang, ture);
// $token->validasi(token, token_validasi, true);

echo $token->generate('alpha', 10);
echo '  ';
echo $token->generate('alnum', 10);
echo '  ';
echo $token->generate('numeric', 10);
echo '  ';
echo $token->generate('nozero', 10);
echo '  ';
$token->validasi('disini_token', 'disini_token_validasi');
