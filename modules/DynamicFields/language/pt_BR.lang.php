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
    'LNK_NEW_CALL' => 'Registrar Chamada',
    'LNK_NEW_MEETING' => 'Agendar Reunião',
    'LNK_NEW_TASK' => 'Criar Tarefa',
    'LNK_NEW_NOTE' => 'Criar Anotação ou Anexo',
    'LNK_NEW_EMAIL' => 'Arquivar E-mail',
    'LNK_CALL_LIST' => 'Chamadas',
    'LNK_MEETING_LIST' => 'Reuniões',
    'LNK_TASK_LIST' => 'Tarefas',
    'LNK_NOTE_LIST' => 'Anotações',
    'LNK_EMAIL_LIST' => 'E-mails',
    'LBL_ADD_FIELD'=> 'Adicionar Campo:',
	'LBL_MODULE_SELECT' => 'Módulo para Editar',
	'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Módulo',
	'COLUMN_TITLE_NAME' => 'Nome do Campo',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Rótulo para Exibição',
    'COLUMN_TITLE_LABEL_VALUE' => 'Valor do Rótulo',
	'COLUMN_TITLE_LABEL' => 'Rótulo do Sistema',
	'COLUMN_TITLE_DATA_TYPE' => 'Tipo de Dado',
	'COLUMN_TITLE_MAX_SIZE' => 'Tamanho Máximo',
	'COLUMN_TITLE_HELP_TEXT' => 'Texto de Ajuda',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Texto de Comentário',
	'COLUMN_TITLE_REQUIRED_OPTION' => 'Campo Obrigatório',
	'COLUMN_TITLE_DEFAULT_VALUE' => 'Valor Padrão',
	'COLUMN_TITLE_DEFAULT_EMAIL' => 'Valor Padrão',
	'COLUMN_TITLE_EXT1' => 'Metadados do Campo Extra 1',
	'COLUMN_TITLE_EXT2' => 'Metadados do Campo Extra 2',
	'COLUMN_TITLE_EXT3' => 'Metadados do Campo Extra 3',
	'COLUMN_TITLE_FRAME_HEIGHT' => 'Altura do IFrame',
	'COLUMN_TITLE_HTML_CONTENT' =>'HTML',
	'COLUMN_TITLE_URL'=>'URL Padrão',
	'COLUMN_TITLE_AUDIT' =>'Audit',
        'COLUMN_TITLE_FTS' =>'Pesquisável por Full Text',
	'COLUMN_TITLE_REPORTABLE' => 'Reportável',
	'COLUMN_TITLE_MIN_VALUE' => 'Valor Mínimo',
	'COLUMN_TITLE_MAX_VALUE' => 'Valor Máximo',
	'COLUMN_TITLE_LABEL_ROWS' => 'Linhs',
	'COLUMN_TITLE_LABEL_COLS' => 'Colunas',
	'COLUMN_TITLE_DISPLAYED_ITEM_COUNT'=>'# Itens mostrados',
	'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto Incrementar Próximo Valor',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Desativar Formato',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Ativar Pesquisa de Intervalo',
    'COLUMN_TITLE_GLOBAL_SEARCH'=>'Pesquisa Global',	
	'LBL_DROP_DOWN_LIST' => 'Lista Dropdown',
	'LBL_RADIO_FIELDS'=> 'Campos Rádio',
	'LBL_MULTI_SELECT_LIST'=> 'Lista de Multi-seleção',
	'COLUMN_TITLE_PRECISION'=> 'Precisão',
	'MSG_DELETE_CONFIRM' => 'Você está certo que quer excuir este item?',
	'POPUP_INSERT_HEADER_TITLE' => 'Adicionar Campo Personalizado',
	'POPUP_EDIT_HEADER_TITLE' => 'Editar Campo Personalizado',
	'LNK_SELECT_CUSTOM_FIELD' => 'Selecionar Campo Personalizado',
	'LNK_REPAIR_CUSTOM_FIELD' => 'Reparar Campos Personalizados',
	'LBL_MODULE' => 'Módulo',
	'COLUMN_TITLE_MASS_UPDATE'=>'Atualização em Masa',
    'COLUMN_TITLE_IMPORTABLE'=>'Importável',
    'COLUMN_TITLE_DUPLICATE_MERGE'=>'Mesclar Duplicados',
    'LBL_LABEL'=>'Rórulo',
    'LBL_DATA_TYPE'=>'Tipo de dado',
    'LBL_DEFAULT_VALUE'=>'Valor Padrão',
    'LBL_AUDITED'=>'Auditável',
    'LBL_REPORTABLE'=>'Reportável',
    'ERR_RESERVED_FIELD_NAME' => "Palavra Reservada",
	'ERR_SELECT_FIELD_TYPE' => 'Por favor selelcione um Tipo de Campo',
	'ERR_FIELD_NAME_ALREADY_EXISTS' => 'O campo Nome já existe',
    'LBL_BTN_ADD' => 'Adicionar',
    'LBL_BTN_EDIT' => 'Editar',
    'LBL_GENERATE_URL' => 'Gerar URL',
	'LBL_DEPENDENT_CHECKBOX'=>'Dependente',
	'LBL_DEPENDENT_TRIGGER'=>'Trigger',
    'LBL_CALCULATED'=>'Valor Calculado',
    'LBL_FORMULA'=>'Fórmula',
    'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependente',
    'LBL_BTN_EDIT_VISIBILITY'=>'Editar Visibilidade',
    'LBL_LINK_TARGET'=>'Abrir Link em',
    'LBL_IMAGE_WIDTH' => 'Largura',
    'LBL_IMAGE_HEIGHT' => 'Altura',
    'LBL_IMAGE_BORDER' => 'Borda',
	'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Formato U.S.A.',
	'LBL_DEPENDENT'=>'Dependente',
	'LBL_VISIBLE_IF'=>'Visível se',
	'LBL_ENFORCED'=>'Forçado',
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
	'COLUMN_TITLE_GLOBAL_SEARCH'=>'Pesquisa Global',
);


?>
