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
	'LBL_SEND_DATE_TIME'						=> 'Data de Envio',
	'LBL_IN_QUEUE'								=> 'Em Processamento',
	'LBL_IN_QUEUE_DATE'							=> 'Data de Enfileiramento',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Use somente valores inteiros para especificar o número de E-mails enviados por lote',

	'LBL_ATTACHMENT_AUDIT'						=> ' foi enviado. Não foi duplicado localmente para conservar espaço em disco.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurar Definições de E-mail',
	'LBL_CUSTOM_LOCATION'						=> 'Definida pelo Usuário',
	'LBL_DEFAULT_LOCATION'						=> 'Padrão',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Anexar mensagem de divulgação para cada E-mail',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Conteúdos de Divulgação',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'NOTA: Esta mensagem de E-mail destina-se somente ao(s) destinatário(s) pretendido(s) e pode conter informação confidencial e/ou privilegiada. Qualquer revisão, uso, divulgação ou distribuição não autorizada é expressamente proibida. Se você não é o destinatário pretendido, por favor destrua todas as cópias da mensagem original e notifique o remetente para que o nosso registo de endereços seja corrigido. Muito obrigado!',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Compor mensagem de E-mail nesta definição de caracteres',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Compor mensagem de E-mail usando este cliente',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Excluir anotações e anexos relacionados com E-mails excluídos',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Pré preenchimento de padrões Gmail&#153;',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Número de E-mails enviados por lote:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Ativar SMTP sobre SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Padrões de E-mail do Usuário',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configurações de E-mail de Saída',
	'LBL_EMAILS_PER_RUN'						=> 'Número de E-mails enviados por lote:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campanha',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Processado',
	'LBL_LIST_FORM_TITLE'						=> 'Fila',
	'LBL_LIST_FROM_EMAIL'						=> 'E-mail "De"',
	'LBL_LIST_FROM_NAME'						=> 'Nome "De"',
	'LBL_LIST_IN_QUEUE'							=> 'Em Processamento',
	'LBL_LIST_MESSAGE_NAME'						=> 'Mensagem de Marketing',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'E-mail do Destinatário',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nome do Destinatário',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Tentativas de Envio',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Enviar em',
	'LBL_LIST_USER_NAME'						=> 'Nome de Usuário',
	'LBL_LOCATION_ONLY'							=> 'Localização',
	'LBL_LOCATION_TRACK'						=> 'Localização dos arquivos de Rastreamento da Campanha (como campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Manter cópias das mensagens de Campanha:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Você gostaria de armazenar cópias completas de <bold>CADA</bold> mensagem de E-mail enviada durante todas as campanhas? <bold>Nós recomendamose por padrão é Não</bold>. Escolhendo Não, o sistema irá armazenar apenas os modelos que são enviados e as variáveis necessárias para recriar a mensagem individual.',
	'LBL_MAIL_SENDTYPE'							=> 'Agente de Transferência de E-mail:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Usar Autenticação SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Senha SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Porta SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor de E-mail SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Usuário SMTP:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Escolha seu provedor de E-mail',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Senha Yahoo! Mail',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID Yahoo! Mail',
	'LBL_GMAIL_SMTPPASS'					=> 'Senha Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'Endereço de E-mail Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Senha Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Usuário Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Porta do Servidor Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange',
	'LBL_EMAIL_LINK_TYPE'				=> 'Cliente de E-mail',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Cliente de E-mail Sugar:</b> Enviar E-mails usando o Cliente de E-mail do sistema.<br><b>Cliente de E-mail Externo:</b> Enviar E-mails usando o Cliente de E-mail externo ao sistema, como o Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'ID de Marketing',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Configurações de E-mail',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Definir Configuração de Campanhas de E-mail',
	'LBL_MODULE_TITLE'							=> 'Gerenciamento de Filas de E-mail de Saída',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Quando ativada, E-mail serão enviados para os Usuários quando registros forem atribuídos a eles.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Endereço "De":',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nome "De":',
	'LBL_NOTIFY_ON'								=> 'Notificações de Atribuição',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Enviar notificações para novos usuários',
	'LBL_NOTIFY_TITLE'							=> 'Opções de E-mail',
	'LBL_OLD_ID'								=> 'ID Antigo',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opções de E-mail de Saída',
	'LBL_RELATED_ID'							=> 'ID Relacionado',
	'LBL_RELATED_TYPE'							=> 'Tipo Relacionado',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Salvar E-mails de Saída (Não Mesclados)',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Pesquisar Processados',
	'LBL_SEARCH_FORM_TITLE'						=> 'Pesquisar Fila',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Visualizar E-mails Processados',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Visualizar E-mails Enfileirados',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Valor definido para site_url no arquivo Config.php',
	'TXT_REMOVE_ME_ALT'							=> 'Para sair desta lista de E-mails vá para',
	'TXT_REMOVE_ME_CLICK'						=> 'clique aqui',
	'TXT_REMOVE_ME'								=> 'Para sair desta lista de E-mails ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificação da atribuição de enedereço de E-mail do usuário',

	'LBL_SECURITY_TITLE'						=> 'Definições de Seguraça de E-mail',
	'LBL_SECURITY_DESC'							=> 'Marque a seguir as tags que NÃO devem ser permitidas nos E-mails de Entrada ou mostradas no Módulo E-mails.',
	'LBL_SECURITY_APPLET'						=> 'tag Applet',
	'LBL_SECURITY_BASE'							=> 'tag Base',
	'LBL_SECURITY_EMBED'						=> 'tag Embed',
	'LBL_SECURITY_FORM'							=> 'tag Form',
	'LBL_SECURITY_FRAME'						=> 'tag Frame',
	'LBL_SECURITY_FRAMESET'						=> 'tag Frameset',
	'LBL_SECURITY_IFRAME'						=> 'tag iFrame',
	'LBL_SECURITY_IMPORT'						=> 'tag Import',
	'LBL_SECURITY_LAYER'						=> 'tag Layer',
	'LBL_SECURITY_LINK'							=> 'tag Link',
	'LBL_SECURITY_OBJECT'						=> 'tag Object',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Selecionar definições mínimas de segurança padrão do Outlook (erros ao lado da exibição correta).',
	'LBL_SECURITY_SCRIPT'						=> 'tag Script',
	'LBL_SECURITY_STYLE'						=> 'tag Style',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Marcar Todas as Opções',
	'LBL_SECURITY_XMP'							=> 'tag Xmp',
    'LBL_YES'                                   => 'Sim',
    'LBL_NO'                                    => 'Não',
    'LBL_PREPEND_TEST'                          => '[Teste]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Tentaivas de Envio',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configurar o servidor padrão de envio de E-mail para enviar notificações, inclusive alertas de workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Permitir que os Usuários usem esta conta para enviar E-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Quando esta opção for selecionada, todos os Usuários serão capazes de enviar e-mails usando a mesma conta que o sistema usa para enviar notificações e alertas.<br>Se a opção não for selecionada, os Usuários ainda podem utilizar o servidor de correio de saída, depois de o definirem nas suas próprias configurações de conta.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Quando ativado, o nome do Usuário Atribuidor será incluído no campo "De" do e-mail.<br>Este recurso pode não funcionar com servidores SMTP que não permitem o envio de uma conta de e-mail diferente da conta do servidor.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
);

?>
