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
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Vanio Vieira (vvanio@yahoo.com.br).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Oportunidades',
  'LBL_MODULE_TITLE' => 'Oportunidades: Tela Principal',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Oportunidades',
  'LBL_VIEW_FORM_TITLE' => 'Visualizar Oportunidades',
  'LBL_LIST_FORM_TITLE' => 'Listar Oportunidades',
  'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade:',
  'LBL_OPPORTUNITY' => 'Oportunidade:',
  'LBL_NAME' => 'Nome da Oportunidade',
  'LBL_INVITEE' => 'Contatos',
  'LBL_CURRENCIES' => 'Moedas',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
  'LBL_LIST_AMOUNT' => 'Valor da Oportunidade',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Valor',
  'LBL_LIST_DATE_CLOSED' => 'Fechar',
  'LBL_LIST_SALES_STAGE' => 'Estágio de Vendas',
  'LBL_ACCOUNT_ID'=>'ID da Conta',
  'LBL_CURRENCY_ID'=>'Moeda ID',
  'LBL_CURRENCY_NAME'=>'Nome da Moeda',
  'LBL_CURRENCY_SYMBOL'=>'Símbolo da Moeda',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Oportunidade - Atualizar Moeda',
  'UPDATE_DOLLARAMOUNTS' => 'Atualizar Valor em U.S.A. Dolares',
  'UPDATE_VERIFY' => 'Verificar Valores',
  'UPDATE_VERIFY_TXT' => 'Verifique se os valores da oportunidade são números decimais válidos (somente caracteres numéricos[0-9] e separador decimal).',
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
  'UPDATE_BUG_COUNT' => 'Bugs encontrados e Tentativas de Resolução:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs encontrados:',
  'UPDATE_COUNT' => 'Registros Atualizados:',
  'UPDATE_RESTORE_COUNT' => 'Valor dos Registros Restaurados:',
  'UPDATE_RESTORE' => 'Restaurar Valores',
  'UPDATE_RESTORE_TXT' => 'Restaura o valor do total a partir dos backup criados durante a correção.',
  'UPDATE_FAIL' => 'Não foi possível atualizar - ',
  'UPDATE_NULL_VALUE' => 'O Valor é NULO, definindo-o para 0 -',
  'UPDATE_MERGE' => 'Mesclar Moedas',
  'UPDATE_MERGE_TXT' => 'Mesclar múltiplas moedas em uma única. Se existirem multiplos registros de moedas para a mesma moeda, voce pode mesclá-los. Isto irá mesclar as moedas para todos os outros módulos.',
  'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
  'LBL_AMOUNT' => 'Valor da Oportunidade:',
  'LBL_AMOUNT_USDOLLAR' => 'Valor:',
  'LBL_CURRENCY' => 'Moeda:',
  'LBL_DATE_CLOSED' => 'Data de Fechamento Estimada:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campanha:',
  'LBL_NEXT_STEP' => 'Próximo Passo:',
  'LBL_LEAD_SOURCE' => 'Fonte do Lead:',
  'LBL_SALES_STAGE' => 'Estágio de Vendas:',
  'LBL_PROBABILITY' => 'Probabilidade (%):',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_DUPLICATE' => 'Possível Oportunidade Duplicada',
  'MSG_DUPLICATE' => 'A Oportunidade que você está para criar pode ser uma duplicação de um registro de oportunidade já existente. Registros de Oportunidades contendo dados similares estão listados abaixo.<br>. Clique Salvar para continuar criando esta nova oportunidade, ou clique Cancelar para retornar ao módulo sem ter criado a oportunidade.',
  'LBL_NEW_FORM_TITLE' => 'Criar Oportunidade',
  'LNK_NEW_OPPORTUNITY' => 'Criar Oportunidade',
  'LNK_OPPORTUNITY_LIST' => 'Visualizar Oportunidades',
  'ERR_DELETE_RECORD' => 'Um número de registro deve ser informado para excluir a oportunidade.',
  'LBL_TOP_OPPORTUNITIES' => 'Minhas Melhores Oportunidades Abertas',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Você está certo que quer remover este contato desta oportunidade?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Você está certo que quer remover esta oportunidade deste projeto?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Histórico',
    'LBL_RAW_AMOUNT'=>'Valor Base',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
	'LBL_ASSIGNED_TO_NAME' => 'Atribuído para:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído para',
  'LBL_LIST_SALES_STAGE' => 'Estágio de Vendas',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Minhas Oportunidades Fechadas',
  'LBL_TOTAL_OPPORTUNITIES' => 'Total de Oportunidades',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades Fechadas - Ganhamos',
  'LBL_ASSIGNED_TO_ID' =>'Atribuído para:',
  'LBL_CREATED_ID'=>'Criado por ID',
  'LBL_MODIFIED_ID'=>'Modificado por ID',
  'LBL_MODIFIED_NAME'=>'Modificado por',
    'LBL_CREATED_USER' => 'Criado por',
    'LBL_MODIFIED_USER' => 'Modificado por',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanhas',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
  'LABEL_PANEL_ASSIGNMENT' => 'Atribuição',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunidades',
  'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
  //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID da Campanha',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo da Oportunidade',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atribuído para',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atribuído para ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por ID',
    'LBL_EXPORT_CREATED_BY' => 'Criado por ID',
    'LBL_EXPORT_NAME'=>'Nome',

  // SNIP
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'E-mails de Contatos Relacionados',
);

?>
