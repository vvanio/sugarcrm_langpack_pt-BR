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
	//module
	'LBL_MODULE_NAME' => 'Documentos',
	'LBL_MODULE_TITLE' => 'Documentos: Tela Principal',
	'LNK_NEW_DOCUMENT' => 'Criar Documento',
	'LNK_DOCUMENT_LIST'=> 'Visualizar Documentos',
	'LBL_DOC_REV_HEADER' => 'Revisões do Documento',
	'LBL_SEARCH_FORM_TITLE'=> 'Pesquisar Documentos',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID do Documento',
	'LBL_NAME' => 'Nome do Documento',
	'LBL_DESCRIPTION' => 'Descrição',
	'LBL_CATEGORY' => 'Categoaria',
	'LBL_SUBCATEGORY' => 'Subcategoria',
	'LBL_STATUS' => 'Estado',
	'LBL_CREATED_BY'=> 'Criado por',
	'LBL_DATE_ENTERED'=> 'Data de Criação',
	'LBL_DATE_MODIFIED'=> 'Data de Modificação',
	'LBL_DELETED' => 'Excluído',
	'LBL_MODIFIED'=> 'Modificado por',
	'LBL_MODIFIED_USER' => 'Modificado por',
	'LBL_CREATED'=> 'Criado por',
	'LBL_REVISIONS'=>'Revisões',
	'LBL_RELATED_DOCUMENT_ID'=>'ID do Documento Relacionado',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID da Revisão do Documento Relacionado',
	'LBL_IS_TEMPLATE'=>'É um Modelo',
	'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_ASSIGNED_TO_NAME'=>'Atribuído para:',
	'LBL_REVISION_NAME' => 'Número da Revisão',
	'LBL_MIME' => 'MIME Type',
	'LBL_REVISION' => 'Revisão',
	'LBL_DOCUMENT' => 'Documento Relacionado',
	'LBL_LATEST_REVISION' => 'Última Revisão',
	'LBL_CHANGE_LOG'=> 'Registro de Alterações',
	'LBL_ACTIVE_DATE'=> 'Data de Publicação',
	'LBL_EXPIRATION_DATE' => 'Data de Expiração',
	'LBL_FILE_EXTENSION'  => 'Extensão do Arquivo',
	'LBL_LAST_REV_MIME_TYPE' => ' MIME Type da Última Revisão',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Não Especificado',
    'LBL_HOMEPAGE_TITLE' => 'Meus Documentos',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Novo Documento',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nome do Documento:',
	'LBL_FILENAME' => 'Nome do Arquivo:',
	'LBL_LIST_FILENAME' => 'Arquivo:',
	'LBL_DOC_VERSION' => 'Revisão:',
	'LBL_FILE_UPLOAD' => 'Arquivo:',

	'LBL_CATEGORY_VALUE' => 'Categoria:',
	'LBL_LIST_CATEGORY' => 'Categoria',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoria:',
	'LBL_DOC_STATUS'=> 'Estado:',
	'LBL_LAST_REV_CREATOR' => 'Revisão Criada por:',
	'LBL_LASTEST_REVISION_NAME' => 'Nome da Última Revisão:',
	'LBL_SELECTED_REVISION_NAME' => 'Nome da Revisão Selecionada:',
	'LBL_CONTRACT_STATUS' => 'Estado do Contrato:',
	'LBL_CONTRACT_NAME' => 'Nome do Contrato:',
	'LBL_LAST_REV_DATE' => 'Data da Revisão:',
	'LBL_DOWNNLOAD_FILE'=> 'Download do Arquivo:',
	'LBL_DET_RELATED_DOCUMENT'=>'Documento Relacionado:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revisão do Documento Relacionado:",
	'LBL_DET_IS_TEMPLATE'=>'Modelo? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
	'LBL_DOC_DESCRIPTION'=>'Descrição:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data de Publicação:',
	'LBL_DOC_EXP_DATE'=> 'Data de Expiração:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
	'LBL_LIST_DOCUMENT' => 'Documentos',
	'LBL_LIST_CATEGORY' => 'Categoria',
	'LBL_LIST_SUBCATEGORY' => 'Subcategoria',
	'LBL_LIST_REVISION' => 'Revisão',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
	'LBL_LIST_LAST_REV_DATE' => 'Data de Revisão',
	'LBL_LIST_VIEW_DOCUMENT'=>'Visualizar',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Data de Publicação',
	'LBL_LIST_EXP_DATE' => 'Data de Expiração',
	'LBL_LIST_STATUS'=>'Estado',
	'LBL_LINKED_ID' => 'ID Relacionado',
	'LBL_SELECTED_REVISION_ID' => 'ID da Revisão Selecionada',
	'LBL_LATEST_REVISION_ID' => 'ID da Última Revisão',
	'LBL_SELECTED_REVISION_FILENAME' => 'Nome de Arquivo da Revisão Selecionada',
	'LBL_FILE_URL' => 'URL do Arquivo',
    'LBL_REVISIONS_PANEL' => 'Detalhes da Revisão',
    'LBL_REVISIONS_SUBPANEL' => 'Revisões',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nome do Documento:',
	'LBL_SF_CATEGORY' => 'Categoria:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data de Publicação:',
	'LBL_SF_EXP_DATE'=> 'Data de Expiração:',

	'DEF_CREATE_LOG' => 'Documento Criado',

	//error messages
	'ERR_DOC_NAME'=>'Nome do Documento',
	'ERR_DOC_ACTIVE_DATE'=>'Data de Publicação',
	'ERR_DOC_EXP_DATE'=> 'Data de Expiração',
	'ERR_FILENAME'=> 'Nome do Arquivo',
	'ERR_DOC_VERSION'=> 'Versão do Documento',
	'ERR_DELETE_CONFIRM'=> 'Você quer excluir esta Revisão de Documento?',
	'ERR_DELETE_LATEST_VERSION'=> 'Você não tem prmissão para excluir a Última Revisão de um documento.',
	'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Modelo de Mail Merge:',
	'ERR_MISSING_FILE' => 'Está faltando o arquivo deste documento, provavelmente devido a algum erro duranye o upload. Por favor, tente carregar novamente o arquivo ou contate o Administrador do Sistema.',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nome',
	'LBL_CONTRACT_NAME'=>'Nome do Contrato:',
	'LBL_LIST_IS_TEMPLATE'=>'Modelo?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_LIST_SELECTED_REVISION'=>'Revisão Selecionada',
	'LBL_LIST_LATEST_REVISION'=>'Última Revisão',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos Relacionados',
	'LBL_LAST_REV_CREATE_DATE'=>'Data de Criação da Última Revisão',
    //'LNK_DOCUMENT_CAT'=>'Categorias de Documentos',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CREATED_USER' => 'Criado por',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversões',
    'LBL_DOCUMENT_INFORMATION' => 'Visão Geral',
	'LBL_DOC_ID' => 'ID do Documento Origem',
	'LBL_DOC_TYPE' => 'Origem',
	'LBL_LIST_DOC_TYPE' => 'Origem',
    'LBL_DOC_TYPE_POPUP' => 'Selecione uma origem de onde este documento será carregado<br> e de onde ele estará disponível.',
	'LBL_DOC_URL' => 'URL do Documento Origem',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome do Arquivo',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Os primeiros 20 arquivos modificados recentemente serão mostrados em order descendente na lista abaixo. Use a Pesquisa para encontrar outros arquivos.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome do Arquivo',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'O Usuário tentou acessar uma API Externa inválida ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'A verificação de login falhou para a API Externa ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',
);


?>
