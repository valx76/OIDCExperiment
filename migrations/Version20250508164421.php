<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250508164421 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE "user" (id SERIAL NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, oidc_id VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "user" (email)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE composite_role DROP CONSTRAINT fk_a63wvekftu8jo1pnj81e7mce2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE composite_role DROP CONSTRAINT fk_gr7thllb9lu8q4vqa4524jjy8
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authentication_flow DROP CONSTRAINT fk_auth_flow_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_consent_client_scope DROP CONSTRAINT fk_grntcsnt_clsc_usc
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_initial_access DROP CONSTRAINT fk_client_init_acc_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_group_membership DROP CONSTRAINT fk_user_group_user
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_attribute DROP CONSTRAINT fk_5hrm2vlf9ql5fu043kqepovbr
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authentication_execution DROP CONSTRAINT fk_auth_exec_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authentication_execution DROP CONSTRAINT fk_auth_exec_flow
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_attribute DROP CONSTRAINT fk_5hrm2vlf9ql5fu022kqepovbr
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE component DROP CONSTRAINT fk_component_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE default_client_scope DROP CONSTRAINT fk_r_def_cli_scope_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE redirect_uris DROP CONSTRAINT fk_1burs8pb4ouj97h5wuppahv9f
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_consent DROP CONSTRAINT fk_grntcsnt_user
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_required_credential DROP CONSTRAINT fk_5hg65lybevavkqfki3kponh9v
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authenticator_config DROP CONSTRAINT fk_auth_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE keycloak_role DROP CONSTRAINT fk_6vyqfe4cn4wlq8r6kt5vdsj5c
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE role_attribute DROP CONSTRAINT fk_role_attribute_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE credential DROP CONSTRAINT fk_pfyr0glasqyl0dei3kl69r6v0
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_scope_role_mapping DROP CONSTRAINT fk_cl_scope_rm_scope
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE group_attribute DROP CONSTRAINT fk_group_attribute_group
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_uris DROP CONSTRAINT fk_resource_server_uris
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associated_policy DROP CONSTRAINT fk_frsrpas14xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associated_policy DROP CONSTRAINT fk_frsr5s213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE scope_policy DROP CONSTRAINT fk_frsrpass3xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE scope_policy DROP CONSTRAINT fk_frsrasp13xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE group_role_mapping DROP CONSTRAINT fk_group_role_group
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_default_groups DROP CONSTRAINT fk_def_groups_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_scope_attributes DROP CONSTRAINT fk_cl_scope_attr_scope
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE protocol_mapper DROP CONSTRAINT fk_pcm_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE protocol_mapper DROP CONSTRAINT fk_cli_scope_mapper
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_resource DROP CONSTRAINT fk_frsrho213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_policy DROP CONSTRAINT fk_frsrpos53xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_policy DROP CONSTRAINT fk_frsrpp213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE federated_identity DROP CONSTRAINT fk404288b92ef007a6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_scope DROP CONSTRAINT fk_frsrpos13xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_scope DROP CONSTRAINT fk_frsrps213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_scope DROP CONSTRAINT fk_frsrso213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE policy_config DROP CONSTRAINT fkdc34197cf864c4e43
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_attribute DROP CONSTRAINT fk_8shxd6l3e9atqukacxgpffptw
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE identity_provider DROP CONSTRAINT fk2b4ebc52ae5c3b34
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_events_listeners DROP CONSTRAINT fk_h846o4h0w8epx5nxev9f5y69j
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE identity_provider_config DROP CONSTRAINT fkdc4897cf864c4e43
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE required_action_provider DROP CONSTRAINT fk_req_act_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE protocol_mapper_config DROP CONSTRAINT fk_pmconfig
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_attributes DROP CONSTRAINT fk3c47c64beacca966
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_supported_locales DROP CONSTRAINT fk_supported_locales_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_enabled_event_types DROP CONSTRAINT fk_h846o4h0w8epx5nwedrf5y69j
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE identity_provider_mapper DROP CONSTRAINT fk_idpm_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_provider DROP CONSTRAINT fk_1fj32f6ptolw2qy60cd8n01e8
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE idp_mapper_config DROP CONSTRAINT fk_idpmconfig
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE web_origins DROP CONSTRAINT fk_lojpho213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_node_registrations DROP CONSTRAINT fk4129723ba992f594
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_role_mapping DROP CONSTRAINT fk_c4fqv34p1mbylloxang7b1q3l
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_policy DROP CONSTRAINT fk_frsrpo213xcx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE scope_mapping DROP CONSTRAINT fk_ouse064plmlr732lxjcn1q5f1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_mapper DROP CONSTRAINT fk_fedmapperpm_realm
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_mapper DROP CONSTRAINT fk_fedmapperpm_fedprv
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket DROP CONSTRAINT fk_frsrho213xcx4wnkog82sspmt
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket DROP CONSTRAINT fk_frsrho213xcx4wnkog83sspmt
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket DROP CONSTRAINT fk_frsrho213xcx4wnkog84sspmt
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket DROP CONSTRAINT fk_frsrpo2128cx4wnkog82ssrfy
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE component_config DROP CONSTRAINT fk_component_config
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_config DROP CONSTRAINT fk_t13hpu1j94r2ebpekr39x5eu5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_smtp_config DROP CONSTRAINT fk_70ej8xdxgxd0b9hh6180irr0o
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_mapper_config DROP CONSTRAINT fk_fedmapper_cfg
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_required_action DROP CONSTRAINT fk_6qj3w1jw9cvafhe19bwsiuvmd
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE composite_role
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_entity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE authentication_flow
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_consent_client_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE event_entity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_initial_access
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE databasechangelog
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_group_membership
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE authentication_execution
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE component
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE federated_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE default_client_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE keycloak_group
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_role_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE redirect_uris
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE org_domain
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_required_action
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE authenticator_config_entry
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_consent
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_required_credential
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE authenticator_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE admin_event_entity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_group_membership
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE required_action_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE keycloak_role
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE role_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE server_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE credential
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE jgroups_ping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE broker_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_scope_role_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE offline_user_session
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE group_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_uris
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE associated_policy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE scope_policy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE group_role_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE org
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_default_groups
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_scope_attributes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE protocol_mapper
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_server_resource
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_policy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE federated_identity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_server_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE policy_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_credential
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE identity_provider
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_events_listeners
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE identity_provider_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE required_action_provider
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_localizations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE protocol_mapper_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_consent_cl_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_attributes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_supported_locales
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_enabled_event_types
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE migration_model
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE identity_provider_mapper
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_scope_client
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fed_user_consent
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_federation_provider
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE revoked_token
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE idp_mapper_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE web_origins
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_auth_flow_bindings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client_node_registrations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_role_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_server_policy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE scope_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE databasechangeloglock
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_federation_mapper
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_server_perm_ticket
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE component_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_federation_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE realm_smtp_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_federation_mapper_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE client
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_required_action
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE offline_client_session
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE resource_server
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE composite_role (composite VARCHAR(36) NOT NULL, child_role VARCHAR(36) NOT NULL, PRIMARY KEY(composite, child_role))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_composite_child ON composite_role (child_role)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_composite ON composite_role (composite)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_entity (id VARCHAR(36) NOT NULL, email VARCHAR(255) DEFAULT NULL, email_constraint VARCHAR(255) DEFAULT NULL, email_verified BOOLEAN DEFAULT false NOT NULL, enabled BOOLEAN DEFAULT false NOT NULL, federation_link VARCHAR(255) DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, realm_id VARCHAR(255) DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, created_timestamp BIGINT DEFAULT NULL, service_account_client_link VARCHAR(255) DEFAULT NULL, not_before INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_service_account ON user_entity (realm_id, service_account_client_link)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_ru8tt6t700s9v50bu18ws5ha6 ON user_entity (realm_id, username)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_email ON user_entity (email)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_dykn684sl8up1crfei6eckhd7 ON user_entity (realm_id, email_constraint)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE authentication_flow (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, alias VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, provider_id VARCHAR(36) DEFAULT 'basic-flow' NOT NULL, top_level BOOLEAN DEFAULT false NOT NULL, built_in BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_auth_flow_realm ON authentication_flow (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_consent_client_scope (user_consent_id VARCHAR(36) NOT NULL, scope_id VARCHAR(36) NOT NULL, PRIMARY KEY(user_consent_id, scope_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_usconsent_scope_id ON user_consent_client_scope (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_usconsent_clscope ON user_consent_client_scope (user_consent_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE event_entity (id VARCHAR(36) NOT NULL, client_id VARCHAR(255) DEFAULT NULL, details_json VARCHAR(2550) DEFAULT NULL, error VARCHAR(255) DEFAULT NULL, ip_address VARCHAR(255) DEFAULT NULL, realm_id VARCHAR(255) DEFAULT NULL, session_id VARCHAR(255) DEFAULT NULL, event_time BIGINT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, user_id VARCHAR(255) DEFAULT NULL, details_json_long_value TEXT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_event_time ON event_entity (realm_id, event_time)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_initial_access (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) NOT NULL, "timestamp" INT DEFAULT NULL, expiration INT DEFAULT NULL, count INT DEFAULT NULL, remaining_count INT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_client_init_acc_realm ON client_initial_access (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE databasechangelog (id VARCHAR(255) NOT NULL, author VARCHAR(255) NOT NULL, filename VARCHAR(255) NOT NULL, dateexecuted TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, orderexecuted INT NOT NULL, exectype VARCHAR(10) NOT NULL, md5sum VARCHAR(35) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, comments VARCHAR(255) DEFAULT NULL, tag VARCHAR(255) DEFAULT NULL, liquibase VARCHAR(20) DEFAULT NULL, contexts VARCHAR(255) DEFAULT NULL, labels VARCHAR(255) DEFAULT NULL, deployment_id VARCHAR(10) DEFAULT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_group_membership (group_id VARCHAR(36) NOT NULL, user_id VARCHAR(36) NOT NULL, membership_type VARCHAR(255) NOT NULL, PRIMARY KEY(group_id, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_group_mapping ON user_group_membership (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_attribute (id VARCHAR(36) DEFAULT 'sybase-needs-something-here' NOT NULL, user_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, long_value_hash BYTEA DEFAULT NULL, long_value_hash_lower_case BYTEA DEFAULT NULL, long_value TEXT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX user_attr_long_values_lower_case ON user_attribute (long_value_hash_lower_case, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX user_attr_long_values ON user_attribute (long_value_hash, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_attribute_name ON user_attribute (name, value)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_attribute ON user_attribute (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE authentication_execution (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, flow_id VARCHAR(36) DEFAULT NULL, alias VARCHAR(255) DEFAULT NULL, authenticator VARCHAR(36) DEFAULT NULL, requirement INT DEFAULT NULL, priority INT DEFAULT NULL, authenticator_flow BOOLEAN DEFAULT false NOT NULL, auth_flow_id VARCHAR(36) DEFAULT NULL, auth_config VARCHAR(36) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_auth_exec_flow ON authentication_execution (flow_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_auth_exec_realm_flow ON authentication_execution (realm_id, flow_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D8175DC49DFF5F89 ON authentication_execution (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_attribute (id VARCHAR(36) DEFAULT 'sybase-needs-something-here' NOT NULL, resource_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_52B3BC6489329D25 ON resource_attribute (resource_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE component (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, parent_id VARCHAR(36) DEFAULT NULL, provider_id VARCHAR(36) DEFAULT NULL, provider_type VARCHAR(255) DEFAULT NULL, sub_type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_component_provider_type ON component (provider_type)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_component_realm ON component (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE federated_user (id VARCHAR(255) NOT NULL, storage_provider_id VARCHAR(255) DEFAULT NULL, realm_id VARCHAR(36) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE default_client_scope (realm_id VARCHAR(36) NOT NULL, scope_id VARCHAR(36) NOT NULL, default_scope BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(realm_id, scope_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_defcls_scope ON default_client_scope (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_defcls_realm ON default_client_scope (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE keycloak_group (id VARCHAR(36) NOT NULL, name VARCHAR(255) DEFAULT NULL, parent_group VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, type INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX sibling_names ON keycloak_group (realm_id, parent_group, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_role_mapping (role_id VARCHAR(36) NOT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, storage_provider_id VARCHAR(36) DEFAULT NULL, PRIMARY KEY(role_id, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_role_mapping_ru ON fed_user_role_mapping (realm_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_role_mapping ON fed_user_role_mapping (user_id, role_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE redirect_uris (client_id VARCHAR(36) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(client_id, value))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_redir_uri_client ON redirect_uris (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE org_domain (id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, verified BOOLEAN NOT NULL, org_id VARCHAR(255) NOT NULL, PRIMARY KEY(id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_org_domain_org_id ON org_domain (org_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_required_action (required_action VARCHAR(255) DEFAULT ' ' NOT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, storage_provider_id VARCHAR(36) DEFAULT NULL, PRIMARY KEY(required_action, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_required_action_ru ON fed_user_required_action (realm_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_required_action ON fed_user_required_action (user_id, required_action)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE authenticator_config_entry (authenticator_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(authenticator_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_consent (id VARCHAR(36) NOT NULL, user_id VARCHAR(36) NOT NULL, client_id VARCHAR(255) DEFAULT NULL, created_date BIGINT DEFAULT NULL, last_updated_date BIGINT DEFAULT NULL, client_storage_provider VARCHAR(36) DEFAULT NULL, external_client_id VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_external_consent ON user_consent (client_storage_provider, external_client_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_local_consent ON user_consent (client_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_consent ON user_consent (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_required_credential (type VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, form_label VARCHAR(255) DEFAULT NULL, input BOOLEAN DEFAULT false NOT NULL, secret BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(realm_id, type))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B261F09DFF5F89 ON realm_required_credential (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE authenticator_config (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, alias VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_auth_config_realm ON authenticator_config (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE admin_event_entity (id VARCHAR(36) NOT NULL, admin_event_time BIGINT DEFAULT NULL, realm_id VARCHAR(255) DEFAULT NULL, operation_type VARCHAR(255) DEFAULT NULL, auth_realm_id VARCHAR(255) DEFAULT NULL, auth_client_id VARCHAR(255) DEFAULT NULL, auth_user_id VARCHAR(255) DEFAULT NULL, ip_address VARCHAR(255) DEFAULT NULL, resource_path VARCHAR(2550) DEFAULT NULL, representation TEXT DEFAULT NULL, error VARCHAR(255) DEFAULT NULL, resource_type VARCHAR(64) DEFAULT NULL, details_json TEXT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_admin_event_time ON admin_event_entity (realm_id, admin_event_time)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_group_membership (group_id VARCHAR(36) NOT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, storage_provider_id VARCHAR(36) DEFAULT NULL, PRIMARY KEY(group_id, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_group_membership_ru ON fed_user_group_membership (realm_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_group_membership ON fed_user_group_membership (user_id, group_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE required_action_config (required_action_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(required_action_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_scope (id VARCHAR(36) NOT NULL, name VARCHAR(255) DEFAULT NULL, realm_id VARCHAR(36) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, protocol VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_clscope ON client_scope (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_cli_scope ON client_scope (realm_id, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_attribute (id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, storage_provider_id VARCHAR(36) DEFAULT NULL, value VARCHAR(2024) DEFAULT NULL, long_value_hash BYTEA DEFAULT NULL, long_value_hash_lower_case BYTEA DEFAULT NULL, long_value TEXT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fed_user_attr_long_values_lower_case ON fed_user_attribute (long_value_hash_lower_case, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fed_user_attr_long_values ON fed_user_attribute (long_value_hash, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_attribute ON fed_user_attribute (user_id, realm_id, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE keycloak_role (id VARCHAR(36) NOT NULL, realm VARCHAR(36) DEFAULT NULL, client_realm_constraint VARCHAR(255) DEFAULT NULL, client_role BOOLEAN DEFAULT false NOT NULL, description VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, realm_id VARCHAR(255) DEFAULT NULL, client VARCHAR(36) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX "UK_J3RWUVD56ONTGSUHOGM184WW2-2" ON keycloak_role (name, client_realm_constraint)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_keycloak_role_realm ON keycloak_role (realm)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_keycloak_role_client ON keycloak_role (client)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE role_attribute (id VARCHAR(36) NOT NULL, role_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_role_attribute ON role_attribute (role_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE server_config (server_config_key VARCHAR(255) NOT NULL, value TEXT NOT NULL, version INT DEFAULT 0, PRIMARY KEY(server_config_key))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE credential (id VARCHAR(36) NOT NULL, user_id VARCHAR(36) DEFAULT NULL, salt BYTEA DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, created_date BIGINT DEFAULT NULL, user_label VARCHAR(255) DEFAULT NULL, secret_data TEXT DEFAULT NULL, credential_data TEXT DEFAULT NULL, priority INT DEFAULT NULL, version INT DEFAULT 0, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_credential ON credential (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE jgroups_ping (address VARCHAR(200) NOT NULL, name VARCHAR(200) DEFAULT NULL, cluster_name VARCHAR(200) NOT NULL, ip VARCHAR(200) NOT NULL, coord BOOLEAN DEFAULT NULL, PRIMARY KEY(address))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE broker_link (identity_provider VARCHAR(255) NOT NULL, user_id VARCHAR(255) NOT NULL, storage_provider_id VARCHAR(255) DEFAULT NULL, realm_id VARCHAR(36) NOT NULL, broker_user_id VARCHAR(255) DEFAULT NULL, broker_username VARCHAR(255) DEFAULT NULL, token TEXT DEFAULT NULL, PRIMARY KEY(identity_provider, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_scope_role_mapping (scope_id VARCHAR(36) NOT NULL, role_id VARCHAR(36) NOT NULL, PRIMARY KEY(scope_id, role_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_role_clscope ON client_scope_role_mapping (role_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_clscope_role ON client_scope_role_mapping (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE offline_user_session (user_session_id VARCHAR(36) NOT NULL, offline_flag VARCHAR(4) NOT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, created_on INT NOT NULL, data TEXT DEFAULT NULL, last_session_refresh INT DEFAULT 0 NOT NULL, broker_session_id VARCHAR(1024) DEFAULT NULL, version INT DEFAULT 0, PRIMARY KEY(user_session_id, offline_flag))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_offline_uss_by_broker_session_id ON offline_user_session (broker_session_id, realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_offline_uss_by_last_session_refresh ON offline_user_session (realm_id, offline_flag, last_session_refresh)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_offline_uss_by_user ON offline_user_session (user_id, realm_id, offline_flag)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE group_attribute (id VARCHAR(36) DEFAULT 'sybase-needs-something-here' NOT NULL, group_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_group_att_by_name_value ON group_attribute (name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_group_attr_group ON group_attribute (group_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_uris (resource_id VARCHAR(36) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(resource_id, value))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_58C3635E89329D25 ON resource_uris (resource_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE associated_policy (policy_id VARCHAR(36) NOT NULL, associated_policy_id VARCHAR(36) NOT NULL, PRIMARY KEY(policy_id, associated_policy_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_assoc_pol_assoc_pol_id ON associated_policy (associated_policy_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B8273A432D29E3C6 ON associated_policy (policy_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE scope_policy (scope_id VARCHAR(36) NOT NULL, policy_id VARCHAR(36) NOT NULL, PRIMARY KEY(scope_id, policy_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_scope_policy_policy ON scope_policy (policy_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3D516A4E682B5931 ON scope_policy (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE group_role_mapping (role_id VARCHAR(36) NOT NULL, group_id VARCHAR(36) NOT NULL, PRIMARY KEY(role_id, group_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_group_role_mapp_group ON group_role_mapping (group_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE org (id VARCHAR(255) NOT NULL, enabled BOOLEAN NOT NULL, realm_id VARCHAR(255) NOT NULL, group_id VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(4000) DEFAULT NULL, alias VARCHAR(255) NOT NULL, redirect_url VARCHAR(2048) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_org_alias ON org (realm_id, alias)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_org_group ON org (group_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_org_name ON org (realm_id, name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_default_groups (realm_id VARCHAR(36) NOT NULL, group_id VARCHAR(36) NOT NULL, PRIMARY KEY(realm_id, group_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_def_grp_realm ON realm_default_groups (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX con_group_id_def_groups ON realm_default_groups (group_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_scope_attributes (scope_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(2048) DEFAULT NULL, PRIMARY KEY(scope_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_clscope_attrs ON client_scope_attributes (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE protocol_mapper (id VARCHAR(36) NOT NULL, client_id VARCHAR(36) DEFAULT NULL, client_scope_id VARCHAR(36) DEFAULT NULL, name VARCHAR(255) NOT NULL, protocol VARCHAR(255) NOT NULL, protocol_mapper_name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_clscope_protmap ON protocol_mapper (client_scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_protocol_mapper_client ON protocol_mapper (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_server_resource (id VARCHAR(36) NOT NULL, resource_server_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, icon_uri VARCHAR(255) DEFAULT NULL, owner VARCHAR(255) NOT NULL, owner_managed_access BOOLEAN DEFAULT false NOT NULL, display_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_frsr6t700s9v50bu18ws5ha6 ON resource_server_resource (name, owner, resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_res_srv_res_res_srv ON resource_server_resource (resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_policy (resource_id VARCHAR(36) NOT NULL, policy_id VARCHAR(36) NOT NULL, PRIMARY KEY(resource_id, policy_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_res_policy_policy ON resource_policy (policy_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3881EFEC89329D25 ON resource_policy (resource_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE federated_identity (identity_provider VARCHAR(255) NOT NULL, user_id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, federated_user_id VARCHAR(255) DEFAULT NULL, federated_username VARCHAR(255) DEFAULT NULL, token TEXT DEFAULT NULL, PRIMARY KEY(identity_provider, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fedidentity_feduser ON federated_identity (federated_user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fedidentity_user ON federated_identity (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_scope (resource_id VARCHAR(36) NOT NULL, scope_id VARCHAR(36) NOT NULL, PRIMARY KEY(resource_id, scope_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_res_scope_scope ON resource_scope (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_2B142FE189329D25 ON resource_scope (resource_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_server_scope (id VARCHAR(36) NOT NULL, resource_server_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, icon_uri VARCHAR(255) DEFAULT NULL, display_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_res_srv_scope_res_srv ON resource_server_scope (resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_frsrst700s9v50bu18ws5ha6 ON resource_server_scope (name, resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE policy_config (policy_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(policy_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FE5EC2612D29E3C6 ON policy_config (policy_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_attribute (name VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(name, realm_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_attr_realm ON realm_attribute (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_credential (id VARCHAR(36) NOT NULL, salt BYTEA DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, created_date BIGINT DEFAULT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, storage_provider_id VARCHAR(36) DEFAULT NULL, user_label VARCHAR(255) DEFAULT NULL, secret_data TEXT DEFAULT NULL, credential_data TEXT DEFAULT NULL, priority INT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_credential_ru ON fed_user_credential (realm_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_credential ON fed_user_credential (user_id, type)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE identity_provider (internal_id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, enabled BOOLEAN DEFAULT false NOT NULL, provider_alias VARCHAR(255) DEFAULT NULL, provider_id VARCHAR(255) DEFAULT NULL, store_token BOOLEAN DEFAULT false NOT NULL, authenticate_by_default BOOLEAN DEFAULT false NOT NULL, add_token_role BOOLEAN DEFAULT true NOT NULL, trust_email BOOLEAN DEFAULT false NOT NULL, first_broker_login_flow_id VARCHAR(36) DEFAULT NULL, post_broker_login_flow_id VARCHAR(36) DEFAULT NULL, provider_display_name VARCHAR(255) DEFAULT NULL, link_only BOOLEAN DEFAULT false NOT NULL, organization_id VARCHAR(255) DEFAULT NULL, hide_on_login BOOLEAN DEFAULT false, PRIMARY KEY(internal_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_idp_for_login ON identity_provider (realm_id, enabled, link_only, hide_on_login, organization_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_idp_realm_org ON identity_provider (realm_id, organization_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_ident_prov_realm ON identity_provider (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_2daelwnibji49avxsrtuf6xj33 ON identity_provider (provider_alias, realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_events_listeners (realm_id VARCHAR(36) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(realm_id, value))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_evt_list_realm ON realm_events_listeners (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE identity_provider_config (identity_provider_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(identity_provider_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_77D7DF25B5FB2C8E ON identity_provider_config (identity_provider_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE required_action_provider (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, alias VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, enabled BOOLEAN DEFAULT false NOT NULL, default_action BOOLEAN DEFAULT false NOT NULL, provider_id VARCHAR(255) DEFAULT NULL, priority INT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_req_act_prov_realm ON required_action_provider (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_localizations (realm_id VARCHAR(255) NOT NULL, locale VARCHAR(255) NOT NULL, texts TEXT NOT NULL, PRIMARY KEY(realm_id, locale))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE protocol_mapper_config (protocol_mapper_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(protocol_mapper_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_7180C3D5BD460FB ON protocol_mapper_config (protocol_mapper_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_consent_cl_scope (user_consent_id VARCHAR(36) NOT NULL, scope_id VARCHAR(36) NOT NULL, PRIMARY KEY(user_consent_id, scope_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_attributes (client_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(client_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_client_att_by_name_value ON client_attributes (name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A1CFA33119EB6921 ON client_attributes (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_supported_locales (realm_id VARCHAR(36) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(realm_id, value))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_supp_local_realm ON realm_supported_locales (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm (id VARCHAR(36) NOT NULL, access_code_lifespan INT DEFAULT NULL, user_action_lifespan INT DEFAULT NULL, access_token_lifespan INT DEFAULT NULL, account_theme VARCHAR(255) DEFAULT NULL, admin_theme VARCHAR(255) DEFAULT NULL, email_theme VARCHAR(255) DEFAULT NULL, enabled BOOLEAN DEFAULT false NOT NULL, events_enabled BOOLEAN DEFAULT false NOT NULL, events_expiration BIGINT DEFAULT NULL, login_theme VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, not_before INT DEFAULT NULL, password_policy VARCHAR(2550) DEFAULT NULL, registration_allowed BOOLEAN DEFAULT false NOT NULL, remember_me BOOLEAN DEFAULT false NOT NULL, reset_password_allowed BOOLEAN DEFAULT false NOT NULL, social BOOLEAN DEFAULT false NOT NULL, ssl_required VARCHAR(255) DEFAULT NULL, sso_idle_timeout INT DEFAULT NULL, sso_max_lifespan INT DEFAULT NULL, update_profile_on_soc_login BOOLEAN DEFAULT false NOT NULL, verify_email BOOLEAN DEFAULT false NOT NULL, master_admin_client VARCHAR(36) DEFAULT NULL, login_lifespan INT DEFAULT NULL, internationalization_enabled BOOLEAN DEFAULT false NOT NULL, default_locale VARCHAR(255) DEFAULT NULL, reg_email_as_username BOOLEAN DEFAULT false NOT NULL, admin_events_enabled BOOLEAN DEFAULT false NOT NULL, admin_events_details_enabled BOOLEAN DEFAULT false NOT NULL, edit_username_allowed BOOLEAN DEFAULT false NOT NULL, otp_policy_counter INT DEFAULT 0, otp_policy_window INT DEFAULT 1, otp_policy_period INT DEFAULT 30, otp_policy_digits INT DEFAULT 6, otp_policy_alg VARCHAR(36) DEFAULT 'HmacSHA1', otp_policy_type VARCHAR(36) DEFAULT 'totp', browser_flow VARCHAR(36) DEFAULT NULL, registration_flow VARCHAR(36) DEFAULT NULL, direct_grant_flow VARCHAR(36) DEFAULT NULL, reset_credentials_flow VARCHAR(36) DEFAULT NULL, client_auth_flow VARCHAR(36) DEFAULT NULL, offline_session_idle_timeout INT DEFAULT 0, revoke_refresh_token BOOLEAN DEFAULT false NOT NULL, access_token_life_implicit INT DEFAULT 0, login_with_email_allowed BOOLEAN DEFAULT true NOT NULL, duplicate_emails_allowed BOOLEAN DEFAULT false NOT NULL, docker_auth_flow VARCHAR(36) DEFAULT NULL, refresh_token_max_reuse INT DEFAULT 0, allow_user_managed_access BOOLEAN DEFAULT false NOT NULL, sso_max_lifespan_remember_me INT DEFAULT 0 NOT NULL, sso_idle_timeout_remember_me INT DEFAULT 0 NOT NULL, default_role VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_master_adm_cli ON realm (master_admin_client)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_orvsdmla56612eaefiq6wl5oi ON realm (name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_enabled_event_types (realm_id VARCHAR(36) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(realm_id, value))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_realm_evt_types_realm ON realm_enabled_event_types (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE migration_model (id VARCHAR(36) NOT NULL, version VARCHAR(36) DEFAULT NULL, update_time BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_update_time ON migration_model (update_time)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE identity_provider_mapper (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, idp_alias VARCHAR(255) NOT NULL, idp_mapper_name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_id_prov_mapp_realm ON identity_provider_mapper (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_scope_client (client_id VARCHAR(255) NOT NULL, scope_id VARCHAR(255) NOT NULL, default_scope BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(client_id, scope_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_cl_clscope ON client_scope_client (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_clscope_cl ON client_scope_client (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fed_user_consent (id VARCHAR(36) NOT NULL, client_id VARCHAR(255) DEFAULT NULL, user_id VARCHAR(255) NOT NULL, realm_id VARCHAR(36) NOT NULL, storage_provider_id VARCHAR(36) DEFAULT NULL, created_date BIGINT DEFAULT NULL, last_updated_date BIGINT DEFAULT NULL, client_storage_provider VARCHAR(36) DEFAULT NULL, external_client_id VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_consent ON fed_user_consent (user_id, client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_cnsnt_ext ON fed_user_consent (user_id, client_storage_provider, external_client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_fu_consent_ru ON fed_user_consent (realm_id, user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_federation_provider (id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, changed_sync_period INT DEFAULT NULL, display_name VARCHAR(255) DEFAULT NULL, full_sync_period INT DEFAULT NULL, last_sync INT DEFAULT NULL, priority INT DEFAULT NULL, provider_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_usr_fed_prv_realm ON user_federation_provider (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE revoked_token (id VARCHAR(255) NOT NULL, expire BIGINT NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_rev_token_on_expire ON revoked_token (expire)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE idp_mapper_config (idp_mapper_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(idp_mapper_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FB184E0244B8D941 ON idp_mapper_config (idp_mapper_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE web_origins (client_id VARCHAR(36) NOT NULL, value VARCHAR(255) NOT NULL, PRIMARY KEY(client_id, value))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_web_orig_client ON web_origins (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_auth_flow_bindings (client_id VARCHAR(36) NOT NULL, binding_name VARCHAR(255) NOT NULL, flow_id VARCHAR(36) DEFAULT NULL, PRIMARY KEY(client_id, binding_name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client_node_registrations (client_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value INT DEFAULT NULL, PRIMARY KEY(client_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_F7FC483919EB6921 ON client_node_registrations (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_role_mapping (role_id VARCHAR(255) NOT NULL, user_id VARCHAR(36) NOT NULL, PRIMARY KEY(role_id, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_role_mapping ON user_role_mapping (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_server_policy (id VARCHAR(36) NOT NULL, resource_server_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, decision_strategy SMALLINT DEFAULT NULL, logic SMALLINT DEFAULT NULL, owner VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_res_serv_pol_res_serv ON resource_server_policy (resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_frsrpt700s9v50bu18ws5ha6 ON resource_server_policy (name, resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE scope_mapping (client_id VARCHAR(36) NOT NULL, role_id VARCHAR(36) NOT NULL, PRIMARY KEY(client_id, role_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_scope_mapping_role ON scope_mapping (role_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_2C9BD92319EB6921 ON scope_mapping (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE databasechangeloglock (id INT NOT NULL, locked BOOLEAN NOT NULL, lockgranted TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, lockedby VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_federation_mapper (id VARCHAR(36) NOT NULL, federation_provider_id VARCHAR(36) NOT NULL, realm_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, federation_mapper_type VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_usr_fed_map_realm ON user_federation_mapper (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_usr_fed_map_fed_prv ON user_federation_mapper (federation_provider_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_server_perm_ticket (id VARCHAR(36) NOT NULL, resource_id VARCHAR(36) NOT NULL, scope_id VARCHAR(36) DEFAULT NULL, resource_server_id VARCHAR(36) NOT NULL, policy_id VARCHAR(36) DEFAULT NULL, owner VARCHAR(255) NOT NULL, requester VARCHAR(255) NOT NULL, created_timestamp BIGINT NOT NULL, granted_timestamp BIGINT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_perm_ticket_owner ON resource_server_perm_ticket (owner)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_perm_ticket_requester ON resource_server_perm_ticket (requester)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_frsr6t700s9v50bu18ws5pmt ON resource_server_perm_ticket (owner, requester, resource_server_id, resource_id, scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EE002E86B08DB528 ON resource_server_perm_ticket (resource_server_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EE002E8689329D25 ON resource_server_perm_ticket (resource_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EE002E86682B5931 ON resource_server_perm_ticket (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EE002E862D29E3C6 ON resource_server_perm_ticket (policy_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE component_config (id VARCHAR(36) NOT NULL, component_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value TEXT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_compo_config_compo ON component_config (component_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_federation_config (user_federation_provider_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, PRIMARY KEY(user_federation_provider_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_9A3D37DBF3121E42 ON user_federation_config (user_federation_provider_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE realm_smtp_config (realm_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, PRIMARY KEY(realm_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_92B1AF309DFF5F89 ON realm_smtp_config (realm_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_federation_mapper_config (user_federation_mapper_id VARCHAR(36) NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL, PRIMARY KEY(user_federation_mapper_id, name))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1C6D835B2E37647 ON user_federation_mapper_config (user_federation_mapper_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE client (id VARCHAR(36) NOT NULL, enabled BOOLEAN DEFAULT false NOT NULL, full_scope_allowed BOOLEAN DEFAULT false NOT NULL, client_id VARCHAR(255) DEFAULT NULL, not_before INT DEFAULT NULL, public_client BOOLEAN DEFAULT false NOT NULL, secret VARCHAR(255) DEFAULT NULL, base_url VARCHAR(255) DEFAULT NULL, bearer_only BOOLEAN DEFAULT false NOT NULL, management_url VARCHAR(255) DEFAULT NULL, surrogate_auth_required BOOLEAN DEFAULT false NOT NULL, realm_id VARCHAR(36) DEFAULT NULL, protocol VARCHAR(255) DEFAULT NULL, node_rereg_timeout INT DEFAULT 0, frontchannel_logout BOOLEAN DEFAULT false NOT NULL, consent_required BOOLEAN DEFAULT false NOT NULL, name VARCHAR(255) DEFAULT NULL, service_accounts_enabled BOOLEAN DEFAULT false NOT NULL, client_authenticator_type VARCHAR(255) DEFAULT NULL, root_url VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, registration_token VARCHAR(255) DEFAULT NULL, standard_flow_enabled BOOLEAN DEFAULT true NOT NULL, implicit_flow_enabled BOOLEAN DEFAULT false NOT NULL, direct_access_grants_enabled BOOLEAN DEFAULT false NOT NULL, always_display_in_console BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_client_id ON client (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX uk_b71cjlbenv945rb6gcon438at ON client (realm_id, client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_required_action (user_id VARCHAR(36) NOT NULL, required_action VARCHAR(255) DEFAULT ' ' NOT NULL, PRIMARY KEY(required_action, user_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_user_reqactions ON user_required_action (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE offline_client_session (user_session_id VARCHAR(36) NOT NULL, client_id VARCHAR(255) NOT NULL, offline_flag VARCHAR(4) NOT NULL, client_storage_provider VARCHAR(36) DEFAULT 'local' NOT NULL, external_client_id VARCHAR(255) DEFAULT 'local' NOT NULL, "timestamp" INT DEFAULT NULL, data TEXT DEFAULT NULL, version INT DEFAULT 0, PRIMARY KEY(user_session_id, client_id, client_storage_provider, external_client_id, offline_flag))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE resource_server (id VARCHAR(36) NOT NULL, allow_rs_remote_mgmt BOOLEAN DEFAULT false NOT NULL, policy_enforce_mode SMALLINT NOT NULL, decision_strategy SMALLINT DEFAULT 1 NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE composite_role ADD CONSTRAINT fk_a63wvekftu8jo1pnj81e7mce2 FOREIGN KEY (composite) REFERENCES keycloak_role (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE composite_role ADD CONSTRAINT fk_gr7thllb9lu8q4vqa4524jjy8 FOREIGN KEY (child_role) REFERENCES keycloak_role (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authentication_flow ADD CONSTRAINT fk_auth_flow_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_consent_client_scope ADD CONSTRAINT fk_grntcsnt_clsc_usc FOREIGN KEY (user_consent_id) REFERENCES user_consent (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_initial_access ADD CONSTRAINT fk_client_init_acc_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_group_membership ADD CONSTRAINT fk_user_group_user FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_attribute ADD CONSTRAINT fk_5hrm2vlf9ql5fu043kqepovbr FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authentication_execution ADD CONSTRAINT fk_auth_exec_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authentication_execution ADD CONSTRAINT fk_auth_exec_flow FOREIGN KEY (flow_id) REFERENCES authentication_flow (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_attribute ADD CONSTRAINT fk_5hrm2vlf9ql5fu022kqepovbr FOREIGN KEY (resource_id) REFERENCES resource_server_resource (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE component ADD CONSTRAINT fk_component_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE default_client_scope ADD CONSTRAINT fk_r_def_cli_scope_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE redirect_uris ADD CONSTRAINT fk_1burs8pb4ouj97h5wuppahv9f FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_consent ADD CONSTRAINT fk_grntcsnt_user FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_required_credential ADD CONSTRAINT fk_5hg65lybevavkqfki3kponh9v FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE authenticator_config ADD CONSTRAINT fk_auth_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE keycloak_role ADD CONSTRAINT fk_6vyqfe4cn4wlq8r6kt5vdsj5c FOREIGN KEY (realm) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE role_attribute ADD CONSTRAINT fk_role_attribute_id FOREIGN KEY (role_id) REFERENCES keycloak_role (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE credential ADD CONSTRAINT fk_pfyr0glasqyl0dei3kl69r6v0 FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_scope_role_mapping ADD CONSTRAINT fk_cl_scope_rm_scope FOREIGN KEY (scope_id) REFERENCES client_scope (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE group_attribute ADD CONSTRAINT fk_group_attribute_group FOREIGN KEY (group_id) REFERENCES keycloak_group (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_uris ADD CONSTRAINT fk_resource_server_uris FOREIGN KEY (resource_id) REFERENCES resource_server_resource (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associated_policy ADD CONSTRAINT fk_frsrpas14xcx4wnkog82ssrfy FOREIGN KEY (policy_id) REFERENCES resource_server_policy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associated_policy ADD CONSTRAINT fk_frsr5s213xcx4wnkog82ssrfy FOREIGN KEY (associated_policy_id) REFERENCES resource_server_policy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE scope_policy ADD CONSTRAINT fk_frsrpass3xcx4wnkog82ssrfy FOREIGN KEY (scope_id) REFERENCES resource_server_scope (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE scope_policy ADD CONSTRAINT fk_frsrasp13xcx4wnkog82ssrfy FOREIGN KEY (policy_id) REFERENCES resource_server_policy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE group_role_mapping ADD CONSTRAINT fk_group_role_group FOREIGN KEY (group_id) REFERENCES keycloak_group (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_default_groups ADD CONSTRAINT fk_def_groups_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_scope_attributes ADD CONSTRAINT fk_cl_scope_attr_scope FOREIGN KEY (scope_id) REFERENCES client_scope (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE protocol_mapper ADD CONSTRAINT fk_pcm_realm FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE protocol_mapper ADD CONSTRAINT fk_cli_scope_mapper FOREIGN KEY (client_scope_id) REFERENCES client_scope (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_resource ADD CONSTRAINT fk_frsrho213xcx4wnkog82ssrfy FOREIGN KEY (resource_server_id) REFERENCES resource_server (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_policy ADD CONSTRAINT fk_frsrpos53xcx4wnkog82ssrfy FOREIGN KEY (resource_id) REFERENCES resource_server_resource (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_policy ADD CONSTRAINT fk_frsrpp213xcx4wnkog82ssrfy FOREIGN KEY (policy_id) REFERENCES resource_server_policy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE federated_identity ADD CONSTRAINT fk404288b92ef007a6 FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_scope ADD CONSTRAINT fk_frsrpos13xcx4wnkog82ssrfy FOREIGN KEY (resource_id) REFERENCES resource_server_resource (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_scope ADD CONSTRAINT fk_frsrps213xcx4wnkog82ssrfy FOREIGN KEY (scope_id) REFERENCES resource_server_scope (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_scope ADD CONSTRAINT fk_frsrso213xcx4wnkog82ssrfy FOREIGN KEY (resource_server_id) REFERENCES resource_server (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE policy_config ADD CONSTRAINT fkdc34197cf864c4e43 FOREIGN KEY (policy_id) REFERENCES resource_server_policy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_attribute ADD CONSTRAINT fk_8shxd6l3e9atqukacxgpffptw FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE identity_provider ADD CONSTRAINT fk2b4ebc52ae5c3b34 FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_events_listeners ADD CONSTRAINT fk_h846o4h0w8epx5nxev9f5y69j FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE identity_provider_config ADD CONSTRAINT fkdc4897cf864c4e43 FOREIGN KEY (identity_provider_id) REFERENCES identity_provider (internal_id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE required_action_provider ADD CONSTRAINT fk_req_act_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE protocol_mapper_config ADD CONSTRAINT fk_pmconfig FOREIGN KEY (protocol_mapper_id) REFERENCES protocol_mapper (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_attributes ADD CONSTRAINT fk3c47c64beacca966 FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_supported_locales ADD CONSTRAINT fk_supported_locales_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_enabled_event_types ADD CONSTRAINT fk_h846o4h0w8epx5nwedrf5y69j FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE identity_provider_mapper ADD CONSTRAINT fk_idpm_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_provider ADD CONSTRAINT fk_1fj32f6ptolw2qy60cd8n01e8 FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE idp_mapper_config ADD CONSTRAINT fk_idpmconfig FOREIGN KEY (idp_mapper_id) REFERENCES identity_provider_mapper (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE web_origins ADD CONSTRAINT fk_lojpho213xcx4wnkog82ssrfy FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE client_node_registrations ADD CONSTRAINT fk4129723ba992f594 FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_role_mapping ADD CONSTRAINT fk_c4fqv34p1mbylloxang7b1q3l FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_policy ADD CONSTRAINT fk_frsrpo213xcx4wnkog82ssrfy FOREIGN KEY (resource_server_id) REFERENCES resource_server (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE scope_mapping ADD CONSTRAINT fk_ouse064plmlr732lxjcn1q5f1 FOREIGN KEY (client_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_mapper ADD CONSTRAINT fk_fedmapperpm_realm FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_mapper ADD CONSTRAINT fk_fedmapperpm_fedprv FOREIGN KEY (federation_provider_id) REFERENCES user_federation_provider (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket ADD CONSTRAINT fk_frsrho213xcx4wnkog82sspmt FOREIGN KEY (resource_server_id) REFERENCES resource_server (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket ADD CONSTRAINT fk_frsrho213xcx4wnkog83sspmt FOREIGN KEY (resource_id) REFERENCES resource_server_resource (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket ADD CONSTRAINT fk_frsrho213xcx4wnkog84sspmt FOREIGN KEY (scope_id) REFERENCES resource_server_scope (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resource_server_perm_ticket ADD CONSTRAINT fk_frsrpo2128cx4wnkog82ssrfy FOREIGN KEY (policy_id) REFERENCES resource_server_policy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE component_config ADD CONSTRAINT fk_component_config FOREIGN KEY (component_id) REFERENCES component (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_config ADD CONSTRAINT fk_t13hpu1j94r2ebpekr39x5eu5 FOREIGN KEY (user_federation_provider_id) REFERENCES user_federation_provider (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE realm_smtp_config ADD CONSTRAINT fk_70ej8xdxgxd0b9hh6180irr0o FOREIGN KEY (realm_id) REFERENCES realm (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_federation_mapper_config ADD CONSTRAINT fk_fedmapper_cfg FOREIGN KEY (user_federation_mapper_id) REFERENCES user_federation_mapper (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_required_action ADD CONSTRAINT fk_6qj3w1jw9cvafhe19bwsiuvmd FOREIGN KEY (user_id) REFERENCES user_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "user"
        SQL);
    }
}
