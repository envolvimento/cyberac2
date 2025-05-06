package com.exemplo.mensagens.controller;

import com.exemplo.mensagens.model.Message;
import com.exemplo.mensagens.service.CryptoService;
import com.exemplo.mensagens.service.MessageService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/mensagens")
public class MessageController {

    @Autowired
    private MessageService messageService;

    @Autowired
    private CryptoService cryptoService;

    @PostMapping
    public String enviarMensagem(@RequestParam String conteudo) throws Exception {
        return messageService.salvarMensagem(conteudo);
    }

    @GetMapping
    public List<Message> listarMensagens() throws Exception {
        return messageService.listarMensagens();
    }
}