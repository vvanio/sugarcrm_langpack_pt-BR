<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the Brazilian Portuguese language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Vanio Vieira (vvanio@yahoo.com.br).
 ********************************************************************************/
 
 $mod_strings = array (
  'LBL_MODULE_NAME' => 'Venda',
  'LBL_MODULE_TITLE' => 'Vendas: Tela Principal',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Vendas',
  'LBL_VIEW_FORM_TITLE' => 'Visualizar Vendas',
  'LBL_LIST_FORM_TITLE' => 'Listar Vendas',
  'LBL_SALE_NAME' => 'Nome da Venda:',
  'LBL_SALE' => 'Venda:',
  'LBL_NAME' => 'Nome da Venda',
  'LBL_LIST_SALE_NAME' => 'Nome',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
  'LBL_LIST_AMOUNT' => 'Total',
  'LBL_LIST_DATE_CLOSED' => 'Fechar',
  'LBL_LIST_SALE_STAGE' => 'Estágio de Vendas',
  'LBL_ACCOUNT_ID'=>'ID da Conta',
   'LBL_CURRENCY_ID'=>'ID da Moeda',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Vendas - Atualização de Moeda',
  'UPDATE_DOLLARAMOUNTS' => 'Atualizar Valores em U.S.A. Dolar',
  'UPDATE_VERIFY' => 'Verificar Valores',
  'UPDATE_VERIFY_TXT' => 'Verifique se os valores da venda são números decimais válidos (somente caracteres numéricos[0-9] e separador decimal).',
  'UPDATE_FIX' => 'Corrigir Valores',
  'UPDATE_FIX_TXT' => 'Tente corrigir qualquer valor inválido criando um número decimal válido para o valor atual. Qualquer valor modificado é armazenado no campo amount_backup do banco de dados. Se você executar este procedimento e receber um mensagem de erro, não execute novamente sem antes restaurar o backup, uma vez que isto pode substituir o backup com novos dados inválidos.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Atualizar Valor em U.S.A. Dolares para oportunidades baseadas na definição atual de taxa de câmbio. Este valor é usado para calcular os Valores dos Gráficos e Tela de Listagem.',
  'UPDATE_CREATE_CURRENCY' => 'Criar Nova Moeda:',
  'UPDATE_VERIFY_FAIL' => 'Verificação de Registros Falhou:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Valor Atual:',
  'UPDATE_VERIFY_FIX' => 'Executar Correções pode trazer',
  'UPDATE_INCLUDE_CLOSE' => 'Incluir Registros Fechados',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Novo Valor:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova Moeda:',
  'UPDATE_DONE' => 'Concluído',
  'UPDATE_BUG_COUNT' => 'Bugs Encontrados e Tentativas de Resolução:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Encontrados:',
  'UPDATE_COUNT' => 'Registros Atualizados:',
  'UPDATE_RESTORE_COUNT' => 'Valor dos Registros Restaurados:',
  'UPDATE_RESTORE' => 'Restaurar Valores',
  'UPDATE_RESTORE_TXT' => 'Restaura o valor do total a partir dos backup criados durante a correção.',
  'UPDATE_FAIL' => 'Não foi possível atualizar - ',
  'UPDATE_NULL_VALUE' => 'O Valor é NULO, definido-o para 0 -',
  'UPDATE_MERGE' => 'Mesclar Moedas',
  'UPDATE_MERGE_TXT' => 'Mesclar múltiplas moedas em uma única. Se existirem multiplos registros de moedas para a mesma moeda, voce pode mesclá-los. Isto irá mesclar as moedas para todos os outros módulos.',
  'LBL_ACCOUNT_NAME' => 'Nome da Empresa:',
  'LBL_AMOUNT' => 'Valor:',
  'LBL_AMOUNT_USDOLLAR' => 'Valor em USD:',
  'LBL_CURRENCY' => 'Moeda:',
  'LBL_DATE_CLOSED' => 'Data de Fechamento Estimada:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campanha:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',  
  'LBL_NEXT_STEP' => 'Próximo Passo:',
  'LBL_LEAD_SOURCE' => 'Fonte de Lead:',
  'LBL_SALES_STAGE' => 'Estágio de Vendas:',
  'LBL_PROBABILITY' => 'Probabilidade (%):',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_DUPLICATE' => 'Possível Venda Duplicada',
  'MSG_DUPLICATE' => 'A Venda que você está para criar pode ser uma duplicação de um registro de venda já existente. Registros de Vendas contendo dados similares estão listados abaixo.<br>. Clique Salvar para continuar criando esta nova venda, ou clique Cancelar para retornar ao módulo sem ter criado a venda.',
  'LBL_NEW_FORM_TITLE' => 'Criar Venda',
  'LNK_NEW_SALE' => 'Criar Venda',
  'LNK_SALE_LIST' => 'Venda',
  'ERR_DELETE_RECORD' => 'Um número de registro deve ser informado para excluir a venda.',
  'LBL_TOP_SALES' => 'Minhas Melhores Vendas Abertas',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Você está certo que quer remover este contato desta venda?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Você está certo que quer remover esta venda desta projeto?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Vendas',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'História',
    'LBL_RAW_AMOUNT'=>'Valor Base',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
	'LBL_ASSIGNED_TO_NAME' => 'Usuário:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído para',
  'LBL_MY_CLOSED_SALES' => 'Minhas Vendas Fechadas',
  'LBL_TOTAL_SALES' => 'Total de Vendas',
  'LBL_CLOSED_WON_SALES' => 'Vendas Fechadas - Ganhamos',
  'LBL_ASSIGNED_TO_ID' =>'Atribuído para ID',
  'LBL_CREATED_ID'=>'Criado por ID',
  'LBL_MODIFIED_ID'=>'Modificado por ID',
  'LBL_MODIFIED_NAME'=>'Modificado por',
  'LBL_SALE_INFORMATION'=>'Informações da Venda',
  'LBL_CURRENCY_ID'=>'ID da Moeda',
  'LBL_CURRENCY_NAME'=>'Nome da Moeda',
  'LBL_CURRENCY_SYMBOL'=>'Símbolo da Moeda',
  'LBL_EDIT_BUTTON' => 'Editar',
   'LBL_REMOVE' => 'Remover',


);

?>
