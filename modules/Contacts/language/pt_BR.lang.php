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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Especifique um número de registro para excluir o contato.',
    'LBL_ACCOUNT_ID' => 'ID da Conta:',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_CAMPAIGN'     => 'Campanha:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
    'LBL_ADD_BUSINESSCARD' => 'Informe o Cartão de Visita',
    'LBL_ADDMORE_BUSINESSCARD' => 'Adicionar outro Cartão de Visita',
    'LBL_ADDRESS_INFORMATION' => 'Informações de Endereço',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'CEP:',
    'LBL_ALT_ADDRESS_STATE' => 'Estado:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Rua 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Rua 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Rua:',
    'LBL_ALTERNATE_ADDRESS' => 'Endereço Alternativo:',
    'LBL_ALT_ADDRESS' => 'Endereço Alternativo:',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_ANY_EMAIL' => 'Qualquer E-mail:',
    'LBL_ANY_PHONE' => 'Qualquer Telefone:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído para:',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído para',
    'LBL_ASSISTANT_PHONE' => 'Telefone do(a) Assistente:',
    'LBL_ASSISTANT' => 'Assistente:',
    'LBL_BIRTHDATE' => 'Data de Nascimento:',
    'LBL_BUSINESSCARD' => 'Cartão de Visita',
    'LBL_CITY' => 'Cidade:',
    'LBL_CAMPAIGN_ID' => 'ID da Camapnha',
    'LBL_CONTACT_INFORMATION' => 'Visão Geral',
    'LBL_CONTACT_NAME' => 'Nome do Contato:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contato-Oportunidade:',
    'LBL_CONTACT_ROLE' => 'Função:',
    'LBL_CONTACT' => 'Contato:',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_ACCOUNT' => 'Criada uma Nova Conta',
    'LBL_CREATED_CALL' => 'Criada uma Nova Chamada',
    'LBL_CREATED_CONTACT' => 'Criado um Novo Contato',
    'LBL_CREATED_MEETING' => 'Criada uma Nova Reunião',
    'LBL_CREATED_OPPORTUNITY' =>'Criada uma Nova Oportunidade',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contatos',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION_INFORMATION' => 'Informações de Descrição',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE'=>'Reporta-se para',
    'LBL_DO_NOT_CALL' => 'Não Telefonar:',
    'LBL_DUPLICATE' => 'Contatos Possivelmente Duplicados',
    'LBL_EMAIL_ADDRESS' => 'Endereço de E-mail:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail (Optou Sair):',
    'LBL_EXISTING_ACCOUNT' => 'Usada uma Conta Existente.',
    'LBL_EXISTING_CONTACT' => 'Usado um Contato Existente.',
    'LBL_EXISTING_OPPORTUNITY'=> 'Usada uma Oportunidade Existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_FULL_NAME' => 'Sobrenome:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Histórico',
    'LBL_HOME_PHONE' => 'Telefone Residencial:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Criar um novo contato automaticamente pela importação de um vCard a partir de seu sistema de arquivos.',
    'LBL_INVALID_EMAIL'=>'E-mail Inválido:',
    'LBL_INVITEE' => 'Reporta-se para',
    'LBL_LAST_NAME' => 'Sobrenome:',
    'LBL_LEAD_SOURCE' => 'Fonte de Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aceitar Estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CONTACT_NAME' => 'Nome do Contato',
    'LBL_LIST_CONTACT_ROLE' => 'Função',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contatos',
    'LBL_VIEW_FORM_TITLE' => 'Visualizar Contatos',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Outro E-mail',
    'LBL_LIST_PHONE' => 'Telefone do Escritório',
    'LBL_LIST_TITLE' => 'Título',
    'LBL_MOBILE_PHONE' => 'Telefone Celular:',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_MODULE_NAME' => 'Contatos',
    'LBL_MODULE_TITLE' => 'Contatos: Tela Principal',
    'LBL_NAME' => 'Nome:',
    'LBL_NEW_FORM_TITLE' => 'Novo Contato',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nova Senha de Portal:',
    'LBL_NOTE_SUBJECT' =>'Assunto da Anotação',
    'LBL_OFFICE_PHONE' => 'Telefone do Escritório:',
    'LBL_OPP_NAME' => 'Nome da Oportunidade:',
    'LBL_OPPORTUNITY_ROLE_ID'=>'Oportunidade - ID da Função:',
    'LBL_OPPORTUNITY_ROLE'=>'Oportunidade - Função',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_PORTAL_ACTIVE' => 'Ativo para Portal:',
    'LBL_PORTAL_APP'=>'Aplicativo de Portal:',
    'LBL_PORTAL_INFORMATION' => 'Informações de Portal',
    'LBL_PORTAL_NAME' => 'Nome de Portal:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Senha de Portal Definida:',
    'LBL_STREET' => 'Rua',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'CEP:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rua 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua:',
    'LBL_PRIMARY_ADDRESS' => 'Endereço:',
    'LBL_PRODUCTS_TITLE'=>'Produtos',
    'LBL_RELATED_CONTACTS_TITLE'=>'Contatos Relacionados',
    'LBL_REPORTS_TO_ID'=>'Reporta-se para ID:',
    'LBL_REPORTS_TO' => 'Reporta-se para:',
    'LBL_RESOURCE_NAME' => 'Nome do Recurso',
    'LBL_SALUTATION' => 'Saudação:',
    'LBL_SAVE_CONTACT' => 'Salvar Contato',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Contatos',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar Contatos Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar Contatos Marcados',
    'LBL_STATE' => 'Estado:',
    'LBL_SYNC_CONTACT' => 'Sincronizat para Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Lista de Leads',
    'LBL_TITLE' => 'Título:',
    'LNK_CONTACT_LIST' => 'Visualizar Contatos',
    'LNK_IMPORT_VCARD' => 'Criar Contato a partir de um vCard',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'LNK_NEW_APPOINTMENT' => 'Agendar Compromisso',
    'LNK_NEW_CALL' => 'Registra Chamada',
    'LNK_NEW_CASE' => 'Criar Ocorrência',
    'LNK_NEW_CONTACT' => 'Criar Contato',
    'LNK_NEW_EMAIL' => 'Arquivar E-mail',
    'LNK_NEW_MEETING' => 'Agendar Reunião',
    'LNK_NEW_NOTE' => 'Criar Anotação',
    'LNK_NEW_OPPORTUNITY' => 'Criar Oportunidade',
    'LNK_NEW_TASK' => 'Criar Tarefa',
    'LNK_SELECT_ACCOUNT' => "Selecionar Conta",
	'MSG_DUPLICATE' => 'O contato que você está para criar pode ser a duplicação de um registro de contato já existente. Registros de Contatos contendo nomes similares estão listados abaixo.<br> Clique Criar Contato para continuar criando um novo contato, ou selecione um contato existente listado abaixo.',
	'MSG_SHOW_DUPLICATES' => 'O contato que você está para criar pode ser a duplicação de um registro de contato já existente. Registros de Contatos contendo nomes similares estão listados abaixo.<br> Clique Salvar para continuar criando um novo contato, ou clique Cancelar para retornar ao módulo sem ter criado o contato.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar endereço alternativo para o endereço principal?',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar endereço principal para o endereço alternativo?',
    'NTC_DELETE_CONFIRMATION' => 'Você está certo que quer excuir este registro?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Criar uma nova oportunidade requer um registro de conta.\nPor favor, crie uma nova conta ou selecione uma já existente.',
    'NTC_REMOVE_CONFIRMATION' => 'Você está certo que quer remover este contato desta ocorrência?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Você está certo que quer remover este registro como um subordinado?',

	'LBL_USER_PASSWORD' => 'Senha:',

	'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
	'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
	'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiar para Endereço Principal',
	'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiar para Endereço Alternativo',

	'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
	'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECTS_RESOURCES' => 'Recursos de Projetos',
	'LBL_TARGET_OF_CAMPAIGNS' => 'Campanhas (Target de) :',
	'LBL_CAMPAIGNS'	=>	'Campanhas',
	'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Campanhas',
	'LBL_LIST_CITY' => 'Cidade',
	'LBL_LIST_STATE' => 'Estado',
	'LBL_HOMEPAGE_TITLE' => 'Meus Contatos',
    'LBL_OPPORTUNITIES' => 'Oportunidades',

	'LBL_CHECKOUT_DATE'=>'Data de Conferência',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campanhas',
    'LNK_IMPORT_CONTACTS' => 'Importar Contatos',

    //For export labels
    'LBL_PHONE_HOME' => 'Telefone Residencial',
    'LBL_PHONE_MOBILE' => 'Telefone Celular',
    'LBL_PHONE_WORK' => 'Telefone do Escritório',
    'LBL_PHONE_OTHER' => 'Outro Telefone',
    'LBL_PHONE_FAX' => 'Telefone/Fax',
    'LBL_CAMPAIGN_ID' => 'ID da Capmanha',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atribuído para',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atribuído para (ID)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por (ID)',
    'LBL_EXPORT_CREATED_BY' => 'Criado por',
    'LBL_EXPORT_PHONE_HOME' => 'Telefone Residencial',
    'LBL_EXPORT_PHONE_MOBILE' => 'Telefone Celular',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'E-mails de Contatos Relacionados',
    'LBL_USER_SYNC' => 'Sincronizar Usuário'
)
?>
