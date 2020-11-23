package de.bmarwell.minecraft;

import java.net.URI;

import java.util.SortedSet;
import java.util.TreeSet;

import de.bmarwell.minecraft.domain.MinecraftPlayer;
import de.bmarwell.minecraft.service.Config;

/**
 * OnlinePlayersReader.
 */
public class OnlinePlayersReader {

    private Config config = null;

    public OnlinePlayersReader(Config config) {
        this.config = config;
    }

    public static void main(String[] args) {
        Config c = new Config();
        OnlinePlayersReader opr = new OnlinePlayersReader(c);
        SortedSet<MinecraftPlayer> players = opr.getOnlinePlayers();
    }

    public SortedSet<MinecraftPlayer> getOnlinePlayers() {
        SortedSet<MinecraftPlayer> players = new TreeSet<MinecraftPlayer>();

        return players;
    }

}
