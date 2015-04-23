<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Editarion is a customer relationship management program developed by
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
'LBL_EDIT_LAYOUT'=>'Editar Layout',
'LBL_EDIT_ROWS'=>'Editar Linhas',
'LBL_EDIT_COLUMNS'=>'Editar Colunas',
'LBL_EDIT_LABELS'=>'Editar Rótulos',
'LBL_EDIT_FIELDS'=>'Editar Campos Personalizados',
'LBL_ADD_FIELDS'=>'Adicionar Campos Personalizados',
'LBL_DISPLAY_HTML'=>'Mostrar Código HTML',
'LBL_SELECT_FILE'=> 'Selecionar Arquivo',
'LBL_SAVE_LAYOUT'=> 'Salvar Layout',
'LBL_SELECT_A_SUBPANEL' => 'Selecionar a Subpanel',
'LBL_SELECT_SUBPANEL' => 'Selecionar Subpanel',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Caixa de Ferramentas',
'LBL_STAGING_AREA' => 'Área de Armazenamento Temporário (araste e solte itens aqui)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (clique nos itens para adicionar à área de armazenamento temporário)',
'LBL_SUGAR_BIN_STAGE' => 'Lixeira Sugar (clique nos itens para adicionar à área de armazenamento temporário)',
'LBL_VIEW_SUGAR_FIELDS' => 'Visualizar Campos Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Visualizar Lixeira Sugar',
'LBL_FAILED_TO_SAVE' => 'Falha ao Salvar',
'LBL_CONFIRM_UNSAVE' => 'Quaisquer modificações não salvas serão perdidas. Você está certo que quer continuar?',
'LBL_PUBLISHING' => 'Publicando...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_FAILED_PUBLISHED' => 'Falha ao Publicar',
'LBL_DROP_HERE' => '[Solte Aqui]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nome',
'LBL_LABEL'=>'Rótulo',
'LBL_MASS_UPDATE'=>'Atualização em Massa',
'LBL_AUDITED'=>'Auditar',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor Padrão',
'LBL_REQUIRED'=>'Obrigatório',
'LBL_DATA_TYPE'=>'Tipo',


'LBL_HISTORY'=>'Histórico',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Bem vindo ao Studio!</h2><br>O que você gostaria de fazer hoje?<br><b>Por favor, selecione uma das opções abaixo.</b>',
'LBL_SW_EDIT_MODULE'=>'Editar um Módulo',
'LBL_SW_EDIT_DROPDOWNS'=>'Editar Dropdowns',
'LBL_SW_EDIT_TABS'=>'Configurar Abas',
'LBL_SW_RENAME_TABS'=>'Renomear Abas',
'LBL_SW_EDIT_GROUPTABS'=>'Configurar Grupos de Abas',
'LBL_SW_EDIT_PORTAL'=>'Editar Portal',
'LBL_SW_EDIT_WORKFLOW'=>'Editar Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Reparar Campos Personalizados',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrar Campos Personalizados',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Bem vindo ao Studio!</h2><br><b>Por favor, selecione um módulo abaixo.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Editar um Módulo</h2>O que você gostaria de fazer com este módulo?<br><b>Por favor, selecione que ação você quer realizar.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Editar Campos Personalizados',
'LBL_SMA_EDIT_LAYOUT'=>'Editar Layout',
'LBL_SMA_EDIT_LABELS' =>'Editar Rótulos',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Previsualização',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Excluir',
'LBL_MB_COMPARE'=>'Comparara',
'LBL_MB_WELCOME'=> '<h2>Histórico</h2><br>O Histórico permite que você visualize edições previamente implantadas do arquivo que você está trabalhando atualmente. Você pode comparar e restaurar uma versão anterior. Se você restaurar um arquivo, ele se tornará sua versão de trabalho. Você deve implantá-lo antes que ele seja visível para qualquer usuário.<br>O que você gostaria de fazer hoje?<br><b> Por favor, selecione uma das opções abaixo.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Criar um Dropdown',
'LBL_ED_WELCOME'=>'<h2>Editor de Dropdown</h2><br><b>Você pode editar um dropdown existente ou criar um novo dropdown.</b>',
'LBL_DROPDOWN_NAME' => 'Nome do Dropdown:',
'LBL_DROPDOWN_LANGUAGE' => 'Indidioma do Dropdown:',
'LBL_TABGROUP_LANGUAGE' => 'Idioma:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Editor de Campos Personalizados</h2><br><b>Você pode editar um campo personalizado existente, criar um novo campo personalizado ou limpar o cache de campos personalizados.</b>',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Visualizar Campos Personalizados',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Criar Campo Personalizado',
'LBL_EC_CLEAR_CACHE'=>'Limpar Cache',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Histórico</h2><br><b>Por favor selecione o arquivo que gostaria de visualizar.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Valor Exibido',
'LBL_DD_DATABASEVALUE'=>'Valor de Banco de Dados',
'LBL_DD_ALL'=>'Todos',

//BUTTONS
'LBL_BTN_SAVE'=>'Salvar',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_SAVEPUBLISH'=>'Salvar e Implantar',
'LBL_BTN_HISTORY'=>'Histórico',
'LBL_BTN_NEXT'=>'Próximo',
'LBL_BTN_BACK'=>'Anterior',
'LBL_BTN_ADDCOLS'=>'Adicionar Colunas',
'LBL_BTN_ADDROWS'=>'Adicionar Linhas',
'LBL_BTN_UNDO'=>'Desfazer',
'LBL_BTN_REDO'=>'Refazer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Adicionar Campo Personalizado',
'LBL_BTN_TABINDEX'=>'Editar Ordem de Tabulação',

//TABS
'LBL_TAB_SUBTABS'=>'Sub Abas',
'LBL_MODULES'=>'Módulos',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administração',
'LBL_CONFIGURE_GROUP_TABS' => 'Configurar Filtros do Menu de Módulos',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Os filtros abaixo serão mostrados na lista Mais no menu de módulos para que os usuários utilizem para visualizar grupos de módulos no menu. Arraste e solte módulos para e dos filtros. Nota: Filtros vazios não serão mostrados no menu.',
'LBL_RENAME_TAB_WELCOME'=>'Clique em qualquer aba de Valor Exibido na tabela abaixo para renomear a aba.',
'LBL_DELETE_MODULE'=>'Remover&nbsp;Módulo<br />do&nbsp;Filtro',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Selecione mostrar a aba "Outros" na barra de navegação. Por padrão, a aba "Outros" mostra qualquer módulo ainda não incluído nos outros grupos.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selecione um idioma disponível, edite o grupo de Rótulos e clique "Salvar e Implantar" para aplicar os rótulos ao idioma selecionado.',
'LBL_ADD_GROUP'=>'Adicionar Filtro',
'LBL_NEW_GROUP'=>'Novo Grupo',
'LBL_RENAME_TABS'=>'Renomear Módulos',
'LBL_DISPLAY_OTHER_TAB' => 'Mostrar Aba \'Outros\'',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Padrão',
'LBL_ADDITIONAL'=>'Adicional',
'LBL_AVAILABLE'=>'Disponível',
'LBL_LISTVIEW_DESCRIPTION'=>'Há três colunas mostradas abaixo. A coluna "Padrão" contém os campos que são mostrados na Tela de Listagem por padrão. A coluna "Adicional" contém os campos que o usuário pode adicionar ao criar uma Tela de Listagem personalizada na Pesquisa Salva. A coluna "Disponível" contém os campos disponíveis para você como Administrador adicionar às colunas Padrão ou Adicional para que os usuários possam utilizá-los.',
'LBL_LISTVIEW_EDIT'=>'Editor de Tela de Listagem',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Erro: O Campo já existe.',
'ERROR_INVALID_KEY_VALUE'=> "Erro: Valor inválido de Chave: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portal Sugar',
'LBL_SMP_WELCOME'=>' Por favor, selecione um módulo que você gostaria de editar a partir da lista abaixo.',
'LBL_SP_WELCOME'=>'Bem vindo ao Studio para Portal Sugar. Você pode escolher editar módulos aqui ou sincronizar um instância de portal.<br>Por favor, selecione da lista abaixo.',
'LBL_SP_SYNC'=>'Sincronizar Portal',
'LBL_SYNCP_WELCOME'=>'Por favor, informe a URL para a instância do portal que você quer atualizar e pressione o botão "Ir".<br>Isto irá solicitar seu nome de usuário e senha.<br>Por favor, informe seu nome de usuário Sugar e sua senha, então pressione o botão "Iniciar Sincronização".',
'LBL_LISTVIEWP_DESCRIPTION'=>'Há duas colunas mostradas abaixo. A coluna "Padrão" contém os campos que são mostrados na Tela por padrão. A coluna "Disponível" contém os campos que não serão mostrados, mas que estão para exibição. Arraste os camps entre as duas colunas. Você também pode reordenar os itens em uma coluna arrastando-os e soltando-os na posição desejada.',
'LBL_SP_STYLESHEET'=>'Carregar uma Folha de Estilos',
'LBL_SP_UPLOADSTYLE'=>'Clique no botão Procurar e selecione um folha de estilos de seu computador para carregar.<br>Da próxima vez que você sincronizar do portal ele trará a folha de estilo junto com ele.',
'LBL_SP_UPLOADED'=> 'Carregado',
'ERROR_SP_UPLOADED'=>'Por favor, certifique-se de que está carregando um folha de estilos CSS.',
'LBL_SP_PREVIEW'=>'Aqui está uma previsualização de como sua Folha de Estilos irá aparecer.',

	'LBL_SAVE' => 'Salvar' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Desfazer' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Refazer' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Na Linha' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Adicionar Campo' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximizar' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimizar' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Adicionar Linha' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Adicionar Campo' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Selecione o idioma para editar.',
'LBL_SINGULAR' => 'Rótulo Singular',
'LBL_PLURAL' => 'Rótulo Plural',
'LBL_RENAME_MOD_SAVE_HELP' => 'Clique <b>Salvar</b> para aplicar as alterações.'

);
?>
