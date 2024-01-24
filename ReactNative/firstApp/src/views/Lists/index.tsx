import { FlatList, View, Text } from "react-native";
import { styles } from "./styles";

const data = [
    {
        id: '1',
        task: 'Realizar compras',
        done: false
    },
    {
        id: '2',
        task: 'Ir à feira',
        done: true,
    },
    {
        id: '3',
        task: 'Comprar de novo',
        done: true,
    },
    {
        id: '4',
        task: 'Viajar',
        done: true,
    },
    {
        id: '5',
        task: 'Viajar',
        done: false,
    },
    {
        id: '6',
        task: 'Viajar',
        done: true,
    },
    {
        id: '7',
        task: 'Viajar',
        done: false,
    },
    {
        id: '8',
        task: 'Viajar',
        done: false,
    },
    {
        id: '9',
        task: 'Viajar',
        done: true,
    },
]

export const Lists = () => {
    //? flatList recebe três props: data, renderItem e key
    return(
        <View style={styles.container}>
            <Text>Lista de tarefas</Text>
            <FlatList 
                data={data} 
                renderItem={({ item, index }) => (
                    <View style={[styles.viewList, {borderColor: item.done ? 'green' : 'red' }  ]}>
                        <Text> {item.task} </Text>
                    </View>
                )} 
                keyExtractor={item => item.id}
            />
        </View>
    )
}

