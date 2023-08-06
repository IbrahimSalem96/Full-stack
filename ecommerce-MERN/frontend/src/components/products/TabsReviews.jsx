import { TextInput, Textarea, SimpleGrid, Group, Button } from '@mantine/core';
import { useForm } from '@mantine/form';


export function TabsReviews() {
    const form = useForm({
        initialValues: {
            name: '',
            email: '',
            subject: '',
            message: '',
        },
        validate: {
            name: (value) => value.trim().length < 2,
            email: (value) => !/^\S+@\S+$/.test(value),
            subject: (value) => value.trim().length === 0,
        },
    });

    return (
        <form onSubmit={form.onSubmit(() => { })}>

            <SimpleGrid cols={2} mt="xl" breakpoints={[{ maxWidth: 'sm', cols: 1 }]}>
                <TextInput
                    label="Name"
                    placeholder="Your name"
                    name="name"
                    variant="filled"
                    {...form.getInputProps('name')}
                />
                <TextInput
                    label="Email"
                    placeholder="Your email"
                    name="email"
                    variant="filled"
                    {...form.getInputProps('email')}
                />
            </SimpleGrid>

            <Textarea
                mt="md"
                label="Message"
                placeholder="Your message"
                maxRows={10}
                minRows={5}
                autosize
                name="message"
                variant="filled"
                {...form.getInputProps('message')}
            />

            <Group mt="xl">
                <Button type="submit" size="md">
                    Send message
                </Button>
            </Group>
        </form>
    );
}