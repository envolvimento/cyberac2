package com.exemplo.mensagens.model;

public class Message {
    private String conteudoCriptografado;
    private String conteudoDescriptografado;

    public Message(String criptografado, String descriptografado) {
        this.conteudoCriptografado = criptografado;
        this.conteudoDescriptografado = descriptografado;
    }

    public String getConteudoCriptografado() { return conteudoCriptografado; }
    public String getConteudoDescriptografado() { return conteudoDescriptografado; }
}