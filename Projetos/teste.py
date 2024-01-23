nome = input('Qual o nome? ')
econtrar = input('O que deseja encontrar?')

if f'{econtrar} in {nome} ':
    print(f'Encontrei a palavra {econtrar}')
else:
    print(f'N]ao encontrei')


string = '100'



condicao = True

while condicao:
    nome = input("Nome: ")
    print(nome)

    if nome == 'sair':
        break
