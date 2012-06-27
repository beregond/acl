<?php

namespace FSi\Component\ACL;

interface ACEInterface
{
    /**
     * Set role which this ACE is assinged to
     *
     * @param RoleInterface $role
     */
    public function setRole(RoleInterface $role);

    /**
     * Set resource which this ACE is assinged to
     *
     * @param ResourceInterface $resource
     */
    public function setResource(ResourceInterface $resource);

    /**
     * Set permissions granted/revoked by this ACE
     *
     * @param PermissionInterface|array $permissions
     */
    public function setPermissions($permissions);

    /**
     * Get role which this ACE is assinged to
     *
     * @return RoleInterface
     */
    public function getRole();

    /**
     * Get resource which this ACE is assinged to
     *
     * @return ResourceInterface
     */
    public function getResource();

    /**
     * Get permissions granted/revoked by this ACE
     *
     * @return array
     */
    public function getPermissions();

    /**
     * Return true if assigned permissions to the assigned resource are granted for assigned role or false otherwise
     *
     * @return bool
     */
    public function isAllowed();
}
