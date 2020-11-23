package de.bmarwell.minecraft.domain;

public class MinecraftPlayer {

    private String account;

    private String name;
    /**
     * Contains x, y, z coordinates.
     */
    private MinecraftPosition position;

    private String world;

    /**
     * Contains health + armor.
     */
    private MinecraftPlayerStatus status;
}
