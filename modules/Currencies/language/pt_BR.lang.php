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
  'LBL_MODULE_NAME' => 'Moedas',
  'LBL_LIST_FORM_TITLE' => 'Moedas',
  'LBL_CURRENCY' => 'Moeda',
  'LBL_ADD' => 'Adicionar',
  'LBL_MERGE' => 'Mesclar',
  'LBL_MERGE_TXT' => 'Por favor selecione as moedas que você gostaria de converter para a moeda selecionada. Isto irá excluir as moedas marcadas e reatribuir qualquer valor relacionado a elas para a moeda selecionada.',
  'LBL_US_DOLLAR' => 'U.S. Dollar',
  'LBL_DELETE' => 'Excluir',
  'LBL_LIST_SYMBOL' => 'Símbolo da Moeda',
  'LBL_LIST_NAME' => 'Nome da Moeda',
  'LBL_LIST_ISO4217' => 'Código ISO 4217',
  'LBL_LIST_ISO4217_HELP' => 'Informe as três letras do Código ISO 4217 que define o nome e o símbolo da moeda.',
  'LBL_UPDATE' => 'Atualizar',
  'LBL_LIST_RATE' => 'Taxa de Conversão',
  'LBL_LIST_RATE_HELP' => 'Um Taxa de Conversão de 0.5 para o Euro significa que: 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Estado',
  'LNK_NEW_CONTACT' => 'Novo Contato',
  'LNK_NEW_ACCOUNT' => 'Nova Conta',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_NEW_CASE' => 'Nova Ocorrência',
  'LNK_NEW_NOTE' => 'Criar Anotção ou Anexo',
  'LNK_NEW_CALL' => 'Nova Chamada',
  'LNK_NEW_EMAIL' => 'Novo E-mail',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'LNK_NEW_TASK' => 'Criar Tarefa',
  'NTC_DELETE_CONFIRMATION' => 'Você está certo que quer excluir este registro? Qualquer registro no sistema utilizando esta moeda será convertido automaticamente para a moeda padrão quando for acessado.<br>Pode ser melhor definí-la com Inativa.',
  'LBL_BELOW_MIN' => 'A Taxa de Conversão deve ser superior a 0',
  'currency_status_dom' => 
  array (
    'Active' => 'Ativa',
    'Inactive' => 'Inativa',
  ),
  'LBL_CREATED_BY' => 'Criado por',
	'LBL_EDIT_LAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
);


?>
