<?php
/**
 * Teste de Sessão - Verificar se sessões funcionam entre páginas
 */
session_start();

echo "<!DOCTYPE html><html><head><title>Teste de Sessão</title></head><body>";
echo "<h2>🧪 Teste de Sessão PHP</h2>";

// Adiciona valor de teste
if (!isset($_SESSION['teste_contador'])) {
    $_SESSION['teste_contador'] = 0;
}
$_SESSION['teste_contador']++;

echo "<p><strong>Session ID:</strong> " . session_id() . "</p>";
echo "<p><strong>Contador de Visitas:</strong> " . $_SESSION['teste_contador'] . "</p>";

echo "<h3>Carrinho de Planos:</h3>";
echo "<pre>";
print_r($_SESSION['carrinho_planos'] ?? 'Não existe');
echo "</pre>";

echo "<h3>Sessão Completa:</h3>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<hr>";
echo '<a href="teste_sessao.php">🔄 Recarregar (contador deve aumentar)</a> | ';
echo '<a href="planos.php">📋 Ir para Planos</a> | ';
echo '<a href="carrinho.php">🛒 Ir para Carrinho</a>';
echo "</body></html>";
