package de.bmarwell.minecraft.service;

import java.net.URI;
import java.net.URISyntaxException;

public class Config {

    public URI getPlayersUrl() {
        URI playeruri = null;

        try {
            playeruri =  new URI("http://example.invalid/players.php");
        } catch (URISyntaxException e) {
            // TODO: LOG.

        }

        return playeruri;
    }
}
