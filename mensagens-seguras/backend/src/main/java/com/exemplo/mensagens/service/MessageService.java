package com.exemplo.mensagens.service;

import com.exemplo.mensagens.model.Message;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;

@Service
public class MessageService {

    private final List<Message> mensagens = new ArrayList<>();

    @Autowired
    private CryptoService cryptoService;

    public String salvarMensagem(String conteudo) throws Exception {
        String criptografado = cryptoService.encrypt(conteudo);
        String descriptografado = cryptoService.decrypt(criptografado);
        mensagens.add(new Message(criptografado, descriptografado));
        return "Mensagem enviada com sucesso!";
    }

    public List<Message> listarMensagens() {
        return mensagens;
    }
}